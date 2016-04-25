<?php

/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/4/23
 * Time: 15:02
 */
class MClients extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getClients($id = false)
    {
       if($id === false){
           $query = $this->db->get_where('clients',array('invalid_id'=>'0'));
//           print_r($query->result_array());
           return $query->result_array();
       }

        $query = $this->db->get_where('clients',array('id'=>$id));
        return $query->row_array();
    }

    public function set_clients(){
        $this->load->helper('url');

//        $name = url_title($this->input->post('name'),'dash',true);

        $data=array(
            'name'=>$this->input->post('name'),
            'wx_id'=>$this->input->post('wx_id'),
            'wx_name'=>$this->input->post('wx_name'),
            'qq'=>$this->input->post('qq'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email'),
            'company'=>$this->input->post('company'),
            'invalid_id'=>'0',
            'recorder'=>$this->input->post('myselect')
        );

        return $this->db->insert('clients',$data);
    }

    public function exist_clients(){
        $query = $this->db->get_where('clients',array('wx_id'=>$this->input->post('wx_id')));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function getClient_wx($wx_id){
        $query = $this->db->get_where('clients',array('wx_id'=>$wx_id));
        return $query->row_array();
    }

}