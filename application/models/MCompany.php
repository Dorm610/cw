<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/13
 * Time: 下午10:57
 */
class MCompany extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_company()
    {
        $this->load->helper('url');
        $this->load->helper('date');

        $name = $this->input->post('name');
        $business_licese = $this->input->post('business_license');
        $product_intro = $this->input->post('product_intro');
        $clients_intro = $this->input->post('clients_intro');
        $third_party_evaluate = $this->input->post('third_party_evaluate');
        $type = $this->input->post('mySelect1');
        $remark = $this->input->post('mySelect2');
        $recorder = $this->input->post('mySelect3');


        $data = array(
            'name' => $name,
            'business_license' => $business_licese,
            'product_intro' => $product_intro,
            'clients_intro' => $clients_intro,
            'third_party_evaluate' => $third_party_evaluate,
            'type' => $type,
            'remark'=> $remark,
            'recorder' => $recorder,
            'invalid_id'=>'0',
        );

        return $this->db->insert('client_company', $data);
    }

    public function get_company($id){
        $query = $this->db->get_where('client_company',array('id'=>$id, 'invalid_id'=>'0'));
        return $query->row_array();
    }

    public function get_allcompany(){
        $query = $this->db->get_where('client_company',array('invalid_id'=>'0'));;
        return $query->result_array();
    }

    public function exist_company_id($id){
        $query = $this->db->get_where('client_company',array('id'=>$id, 'invalid_id'=>'0'));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function exist_company(){
        $query = $this->db->get_where('client_company',array('invalid_id'=>'0'));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function delete_company($id){
        $data=array(
            'invalid_id'=>'1'
        );
        $this->db->update('client_company',$data, array('id' => $id));
    }

}