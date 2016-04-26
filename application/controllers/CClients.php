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
            echo 'wtf no such client:'.$id;
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

        $data['title']='Create a new client';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');
//        $this->form_validation->set_rules('wx_name','WeiXin Name');
//        $this->form_validation->set_rules('qq','QQ Number');
//        $this->form_validation->set_rules('phone','Phone Number');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('clients/create');
            $this->load->view('footer',$data);
        }else{
            $wx_id = $this->mClients->input->post('wx_id');
            if ($this->mClients->exist_clients($wx_id))
            {
                $data['exist'] = 'create_exist';
                $this->load->view('header', $data);
                $this->load->view('clients/exist', $data);
                $this->load->view('footer', $data);
            }else {
                $data['success'] = 'create';
                $this->mClients->set_clients(); //保存数据
                $this->load->view('header', $data);
                $this->load->view('clients/success'); //跳转页面
                $this->load->view('footer', $data);
            }
        }

    }

    public function search(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Search a new client';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('wx_id','Wx_id','required');
//        $this->form_validation->set_rules('wx_name','WeiXin Name');
//        $this->form_validation->set_rules('qq','QQ Number');
//        $this->form_validation->set_rules('phone','Phone Number');
        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('clients/search');
            $this->load->view('footer',$data);
        }else{
            $wx_id = $this->mClients->input->post('wx_id');
            if ($this->mClients->exist_clients($wx_id))
            {
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

    public function modify($wx_id=''){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='Modify a new client';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');
//        $this->form_validation->set_rules('wx_name','WeiXin Name');
//        $this->form_validation->set_rules('qq','QQ Number');
//        $this->form_validation->set_rules('phone','Phone Number');
        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $data['wx_id'] = $wx_id;
            $this->load->view('header',$data);
            $this->load->view('clients/modify', $data);
            $this->load->view('footer',$data);
        }else{
            $data['success'] = 'modify';
            $this->mClients->modifyClient(); //保存数据
            $this->load->view('header', $data);
            $this->load->view('clients/success'); //跳转页面
            $this->load->view('footer', $data);
        }

    }

    public function import(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='Import a new client';
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
                $this->load->view('header', $data);
                $this->load->view('clients/success', $data); //跳转页面
                $this->load->view('footer', $data);
            }
        }

    }
}