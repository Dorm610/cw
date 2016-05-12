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

    public function setDistricts(){

        $province=$this->input->post('province');
        $city=$this->input->post('city');
        $county=$this->input->post('county');

        //区域id与省市县id一致
        if ($county === "0"){
            if ($city === "0"){
                $district_id = $province;
            }else{
                $district_id = $city;
            }
        }else{
            $district_id = $county;
        }

        $data=array(
            'district_id'=>$district_id,
            'province'=>$province,
            'city'=>$city,
            'county'=>$county,
            'town'=>$this->input->post('town'),
            'discri'=>$this->input->post('discri'),
            'coal_source'=>$this->input->post('coal_source'), // -1：未知，0：否，1：是
            'coal_consume'=>$this->input->post('coal_consume'),
            'port'=>$this->input->post('port'),
            'state_gate'=>$this->input->post('state_gate'),
            'invalid_id'=>'0',

        );

        return $this->db->insert('districts',$data);
    }
}