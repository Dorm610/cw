<?php

/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/4/23
 * Time: 12:59
 */
class Pages extends CI_Controller
{
    public function view($page='home'){
        if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
//            show_404();
            echo "wtf";
        }

        $data['title'] = ucfirst($page);

        $this->load->view('header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('footer',$data);


    }

    public function test(){

        $this->load->helper('url');
        $data['base_url']=base_url();
        $this->load->view('clients_page',$data);
    }

    public function index($page='home'){
        if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
//            show_404();
            echo "wtf";
        }

        $data['title'] = ucfirst($page);

        $this->load->view('header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('footer',$data);
    }
}