<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/13
 * Time: 下午10:57
 */
class CCompany extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mCompany');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }

    /**
     * 显示企业列表
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
     * 创建一个公司
     */
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create a new company';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('company/create');
            $this->load->view('footer',$data);
        }else{
            $data['success'] = 'create';
            $this->mCompany->set_company(); //保存数据
            $this->load->view('header', $data);
            $this->load->view('company/success'); //跳转页面
            $this->load->view('footer', $data);
        }
    }

    public function search(){
        $this->load->helper('form');
//        $this->load->library('form_validation');

        $data['title']='Search a new company';
        $data['base_url']=base_url();
        /**
         * 暂时为可查询到全部公司 后期可添加表单查询
         */

        if ($this->mCompany->exist_company()){
            $data['success'] = 'searchall';
            $this->load->view('header', $data);
            $this->load->view('company/success', $data);
            $this->load->view('footer', $data);
        }
        else {
            $data['success'] = 'searchfail';
            $this->load->view('header', $data);
            $this->load->view('company/success', $data);
            $this->load->view('footer', $data);
        }
    }

    /**
     * 显示某个公司的详细数据
     * @param null $id 业务id
     */
    public function view($id=null){

        $data['company']=$this->mCompany->get_company($id);
        $data['base_url']=base_url();
        if (empty($data['company'])) {
            echo 'wtf no such company:'.$id;
            show_404();
        }

        $this->load->view('header',$data);
        $this->load->view('company/view',$data);
        $this->load->view('footer',$data);
    }

    /**
     * 删除个公司的详细数据 将invalid_id设成1
     * @param null $id 业务id
     */
    public function delete($id){
        $this->mCompany->delete_company($id);

        $data['title']='Search a new company';
        $data['base_url']=base_url();

        /**
         * 暂时为可查询到全部公司 后期可添加表单查询
         */
        if ($this->mCompany->exist_company()){
            $data['success'] = 'searchall';
            $this->load->view('header', $data);
            $this->load->view('company/success', $data);
            $this->load->view('footer', $data);
        }
        else {
            $data['success'] = 'searchfail';
            $this->load->view('header', $data);
            $this->load->view('company/success', $data);
            $this->load->view('footer', $data);
        }
    }
}