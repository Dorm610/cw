<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/9
 * Time: 下午4:21
 */
class CMessages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mMessages');
        $this->load->helper('url_helper');
        $this->load->helper('url');
    }

    /**
     * 创建一条业务
     */
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create a new messages';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('content','Content','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('header',$data);
            $this->load->view('messages/create');
            $this->load->view('footer',$data);
        }else{
            $data['success'] = 'create';
            $this->mMessages->set_messages(); //保存数据
            $this->load->view('header', $data);
            $this->load->view('messages/success'); //跳转页面
            $this->load->view('footer', $data);
        }

    }

    public function search(){
        $this->load->helper('form');
//        $this->load->library('form_validation');

        $data['title']='Search a new messages';
        $data['base_url']=base_url();
        /**
         * 暂时为可查询到全部业务 后期可添加表单查询
         */
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
//        $this->form_validation->reset_validation();
//        $this->form_validation->set_rules('title','Title','required');

//        if ($this->form_validation->run() === false){
//            //验证不通过，重新载入
//            $this->load->view('header',$data);
//            $this->load->view('messages/search');
//            $this->load->view('footer',$data);
//        }else{
//            $title = $this->mMessages->input->post('title');
//            if ($this->mMessages->exist_messages_title($title)){
//                $data['success'] = 'search_title';
//                $this->load->view('header', $data);
//                $this->load->view('messages/success', $data);
//                $this->load->view('footer', $data);
//            }
//            else {
//                $data['success'] = 'searchfail';
//                $this->load->view('header', $data);
//                $this->load->view('messages/success', $data);
//                $this->load->view('footer', $data);
//            }
//        }

        if ($this->mMessages->exist_messages()){
            $data['success'] = 'searchall';
            $this->load->view('header', $data);
            $this->load->view('messages/success', $data);
            $this->load->view('footer', $data);
        }
        else {
            $data['success'] = 'searchfail';
            $this->load->view('header', $data);
            $this->load->view('messages/success', $data);
            $this->load->view('footer', $data);
        }
    }

    /**
     * 显示某项业务信息的详细数据
     * @param null $id 业务id
     */
    public function view($id=null){

        $data['messages']=$this->mMessages->get_messages($id);
        $data['base_url']=base_url();
        if (empty($data['messages'])) {
            echo 'wtf no such message:'.$id;
            show_404();
        }

        $data['title']=$data['messages']['id'].'的信息';

        $this->load->view('mobile_header',$data);
        $this->load->view('messages/view',$data);
        $this->load->view('footer',$data);
    }
}