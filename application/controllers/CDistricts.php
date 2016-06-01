<?php

/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/5/2
 * Time: 7:21
 */
class CDistricts extends CI_Controller
{
    public function __construct()
{
    parent::__construct();
    $this->load->model('mDistricts');
    $this->load->helper('url_helper');
    $this->load->helper('url');
}

    /**
     * 显示客户列表
     */
    public function index(){
    $data['districts']=$this->mDistricts->getDistricts();
    $data['title']='地域信息获取';
    $data['base_url']=base_url();
    $this->load->view('header',$data);
    $this->load->view('districts/index',$data);
    $this->load->view('footer',$data);
}

    /**
 * 获取一个客户表单数据
 */
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='新建区域';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('province','Province','required');


        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('districts/create',$data);
            $this->load->view('districts/areaEnd',$data);
        }else{
            $districtID = $this->mDistricts->input->post('districtID');
            if (!empty($districtID)&&$this->mDistricts->existDistricts($districtID))
            {
                $this->load->view('districts/create',$data);
                $this->load->view('districts/areaEnd',$data);
            }else {
                $data['success'] = 'create';
                $this->mDistricts->setDistricts(); //保存数据
                $this->load->view('header', $data);
                $this->load->view('districts/success'); //跳转页面
                $this->load->view('footer', $data);
            }
        }

    }

    /**
     * 获取一个客户表单数据
     */
    public function test(){

//        $data['districts']=$this->mDistricts->getDistricts();
        $data['title']='地域信息获取';
        $data['base_url']=base_url();
//        $this->load->view('header',$data);
        $this->load->view('districts/test',$data);
//        $this->load->view('footer',$data);

    }

}