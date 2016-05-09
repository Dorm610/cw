<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/9
 * Time: 下午4:21
 */
class MMessages extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_messages()
    {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'invalid_id'=>'0',
        );

        return $this->db->insert('messages', $data);
    }

    public function get_messages($title){
        $query = $this->db->get_where('messages',array('title'=>$title));
        return $query->row_array();
    }

    public function get_allmessages(){
        $query = $this->db->get_where('messages',array('invalid_id'=>'0'));;
        return $query->result_array();
    }

    public function exist_messages_title($title){
        $query = $this->db->get_where('messages',array('title'=>$title));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function exist_messages(){
        $query = $this->db->get_where('messages',array('invalid_id'=>'0'));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }
}