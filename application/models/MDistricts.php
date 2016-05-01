<?php

/**
 * Created by PhpStorm.
 * User: CLEVO
 * Date: 2016/5/2
 * Time: 7:19
 */
class MDistricts  extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDistricts($id = false)
    {
        if($id === false){
            $query = $this->db->get_where('districts',array('invalid_id'=>'0'));
            return $query->result_array();
        }

        $query = $this->db->get_where('districts',array('id'=>$id));
        return $query->row_array();
    }
}