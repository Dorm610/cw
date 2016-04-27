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

    public function exist_clients($wx_id){
        $query = $this->db->get_where('clients',array('wx_id'=>$wx_id));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function getClient_wx($wx_id){
        $query = $this->db->get_where('clients',array('wx_id'=>$wx_id));
        return $query->row_array();
    }

    public function modifyClient(){
        $this->load->helper('url');

//        $name = url_title($this->input->post('name'),'dash',true);

        $data=array(
            'name'=>$this->input->post('name'),
            'wx_name'=>$this->input->post('wx_name'),
            'qq'=>$this->input->post('qq'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email'),
            'company'=>$this->input->post('company'),
            'invalid_id'=>'0',
            'recorder'=>$this->input->post('myselect'),
        );
        $wx_id = $this->input->post('wx_id');
        return $this->db->update('clients',$data, array('wx_id' => $wx_id));
    }

    public function importClients(){
        $this->load->helper('url');

        /** Include path **/
        set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/');

        /** PHPExcel_IOFactory */
        include 'PHPExcel/IOFactory.php';
//        $name = url_title($this->input->post('name'),'dash',true);
        $inputFileName = './upload/client.xls';
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        $insertData = array();
        $updateData = array();
        if (sizeof($sheetData) > 0)
        {
            foreach ($sheetData as $row) {
                $wx_id = $row['B'];
                if ($wx_id == null || $wx_id == ""){
                    continue;
                }
                if ($this->exist_clients($wx_id)){
                    $temp0=array(
                        'name'=>$row['A'],
                        'wx_id'=>$row['B'],
                        'wx_name'=>$row['C'],
                        'qq'=>$row['E'],
                        'phone'=>$row['D'],
                        'address'=>$row['F'],
                        'email'=>$row['G'],
                        'company'=>$row['H'],
                        'invalid_id'=>'0',
                    );
                    array_push($updateData, $temp0);
                    continue;
                }
                $temp1=array(
                    'name'=>$row['A'],
                    'wx_id'=>$row['B'],
                    'wx_name'=>$row['C'],
                    'qq'=>$row['E'],
                    'phone'=>$row['D'],
                    'address'=>$row['F'],
                    'email'=>$row['G'],
                    'company'=>$row['H'],
                    'invalid_id'=>'0',
                );
                array_push($insertData, $temp1);
            }
        }
        $this->db->trans_start();
        if (sizeof($updateData)){
            $this->db->update_batch('clients',$updateData,'wx_id');
        }
        if (sizeof($insertData)){
            $this->db->insert_batch('clients',$insertData);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }else
            return true;
    }
}