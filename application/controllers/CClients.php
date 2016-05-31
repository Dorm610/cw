<?php

/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/4/23
 * Time: 15:09
 */
class CClients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mClients');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }

    /**
     * 显示客户列表
     */
    public function index(){
        $data['clients']=$this->mClients->getClients();
        $data['title']='客户数据获取';
        $data['base_url']=base_url();
        $this->load->view('header',$data);
        $this->load->view('clients/index',$data);
        $this->load->view('footer',$data);
    }

    /**
     * 显示某个客户的详细数据
     * @param null $id 客户名称
     */
    public function view($id=null){

        $data['client']=$this->mClients->getClients($id);
        $data['base_url']=base_url();
        if (empty($data['client'])) {
            echo '找不到该客户——编号:'.$id;
            show_404();
        }

        $data['title']=$data['client']['name'].'的信息';

        $this->load->view('header',$data);
        $this->load->view('clients/view',$data);
        $this->load->view('footer',$data);
    }

    /**
     * 获取一个客户表单数据
     */
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='创建客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('clients/create');
            $this->load->view('footer',$data);
        }else{
            // 允许重复
            $data['success'] = 'create';
            $this->mClients->set_clients(); //保存数据
            $this->load->view('header', $data);
            $this->load->view('clients/success'); //跳转页面
            $this->load->view('footer', $data);
        }

    }

    public function search(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='查找客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('clients/search');
            $this->load->view('footer',$data);
        }else{
            $name = $this->mClients->input->post('name');
            $results = $this->mClients->getClient_name($name);
            if (!empty($results))
            {
                $data['results']=$results;
                $data['exist'] = 'search_exist';
                $this->load->view('header', $data);
                $this->load->view('clients/exist', $data);
                $this->load->view('footer', $data);
            }else {
                $data['exist'] = 'search_noexist';
                $this->load->view('header', $data);
                $this->load->view('clients/exist', $data); //跳转页面
                $this->load->view('footer', $data);
            }
        }

    }

    // 必须设置为$id=null，因为提交会刷新到本页面，没有参数
    public function modify($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='修改客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');
        if (isset($id)){
            $data['id'] = $id;
            $data['result'] = $this->mClients->getClients($id);
        }

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('clients/modify', $data);
            $this->load->view('footer',$data);
        }else{
            $data['success'] = 'modify';
            if ($this->mClients->modifyClient($id)){ //保存数据
                $data['success'] = 'modify';
            }else{
                $data['success'] = 'modify_fail';
            }
            $this->load->view('header', $data);
            $this->load->view('clients/success', $data); //跳转页面
            $this->load->view('footer', $data);
        }

    }

    public function import(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='导入客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('filename','FileName','required');

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'xlsx|xls';
        $config['max_size']     = 2048;
        $config['file_name']   = 'client.xls';
        $config['overwrite']   = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('filename'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('header',$data);
            $this->load->view('clients/import', $error);
            $this->load->view('footer',$data);
        }
        else
        {
            $result = array('upload_data' => $this->upload->data());
            $data['result'] = $result;
            if ($this->mClients->importClients()) {
                $data['success'] = 'import';
            }else {
                $data['success'] = 'import_fail';
            }
            $this->load->view('header', $data);
            $this->load->view('clients/success', $data); //跳转页面
            $this->load->view('footer', $data);
        }

    }

    /**
     * 删除客户数据 将invalid_id设成1
     * @param null $id 业务id
     */
    public function delete($id){

        $data['title']='删除客户';
        $data['base_url']=base_url();
        if($this->mClients->deleteClient($id)){
            $data['success'] = 'delete';
        }else{
            $data['success'] = 'delete_fail';
        }

        $this->load->view('header', $data);
        $this->load->view('clients/success', $data);
        $this->load->view('footer', $data);
    }

    /**
     * 微信样式 创建用户
     */
    public function createForWEUI(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='创建客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/clients/create');
        }else{
            // 允许重复
            $this->mClients->set_clients(); //保存数据
            $data['success'] = 'create';
            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/clients/success',$data);
        }

    }

    /**
     * 微信样式 导入用户
     */
    public function importForWEUI(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='导入客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('filename','FileName','required');

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'xlsx|xls';
        $config['max_size']     = 2048;
        $config['file_name']   = 'client.xls';
        $config['overwrite']   = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('filename'))
        {

            $error = array('error' => $this->upload->display_errors());

            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/clients/import', $error);
        }
        else
        {
            echo 222;
            $result = array('upload_data' => $this->upload->data());
            $data['result'] = $result;
            if ($this->mClients->importClients()) {
                $data['success'] = 'import';
            }else {
                $data['success'] = 'import_fail';
            }
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/clients/success', $data); //跳转页面
        }

    }
    
    /**
     * 微信样式 查询用户
     */
    public function searchForWEUI(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='查找客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/clients/search');
        }else{
            $name = $this->mClients->input->post('name');
            $results = $this->mClients->getClient_name($name);
            if (!empty($results))
            {
                $data['results']=$results;
                $data['success'] = 'search_exist';
                $this->load->view('WEUI/header', $data);
                $this->load->view('WEUI/clients/success', $data);
            }else {
                $data['success'] = 'search_noexist';
                $this->load->view('WEUI/header', $data);
                $this->load->view('WEUI/clients/success', $data); //跳转页面
            }
        }

    }
    
    /**
     * 微信样式 查看用户详情
     */
    public function viewForWEUI($id=null){

        $data['client']=$this->mClients->getClients($id);
        $data['base_url']=base_url();
        if (empty($data['client'])) {
            echo '找不到该客户——编号:'.$id;
            show_404();
        }

        $data['title']=$data['client']['name'].'的信息';

        $this->load->view('WEUI/header',$data);
        $this->load->view('WEUI/clients/view',$data);
    }

    /**
     * 微信样式 修改用户
     */
    public function modifyForWEUI($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='修改客户信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');
        if (isset($id)){
            $data['id'] = $id;
            $data['result'] = $this->mClients->getClients($id);
        }
        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/clients/modify', $data);
        }else{
            if ($this->mClients->modifyClient($id)){ //保存数据
                $data['success'] = 'modify_fail';
            }else{
                $data['success'] = 'modify_fail';
            }
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/clients/success', $data); //跳转页面
        }

    }

    /**
     * 微信样式 删除用户
     */
    public function deleteForWEUI($id){

        $data['title']='删除客户';
        $data['base_url']=base_url();
        if($this->mClients->deleteClient($id)){
            $data['success'] = 'delete';
        }else{
            $data['success'] = 'delete_fail';
        }

        $this->load->view('WEUI/header', $data);
        $this->load->view('WEUI/clients/success', $data);
    }
}