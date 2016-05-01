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

}