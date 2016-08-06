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
           $query = $this->db->get_where('clients',array('invalid_id'=>0));
//           print_r($query->result_array());
           //TODO:把其他表里的信息放进来
           return $query->result_array();
       }

        $query = $this->db->get_where('clients',array('id'=>$id,'invalid_id'=>0));
        return $query->row_array();
    }

    public function set_clients(){

        $province=$this->input->post('province');
        $city=$this->input->post('city');
        $county = $this->input->post('county');
        $districtStr=$this->input->post('districtStr');
        $a = explode(',', $districtStr);
        if(count($a)>0){
            $province=$a[0];
        }
        if(count($a)>1){
            $city = $a[1];
        }
        if(count($a)==3){
            $county = $a[2];
        }
        $district_id=$this->input->post('districtID');
        //TODO： 用MD5签名生成id
        $d_data = array(
            'district_id'=>$district_id,
            'province'=>$province,
            'city'=>$city,
            'county'=>$county,
            'town'=>$this->input->post('town'),
            'descri'=>$this->input->post('description'),
            'invalid_id'=>'0',
        );
        $this->db->insert('districts',$d_data);


        $data=array(
            'name'=>$this->input->post('name'),
            'source'=>$this->input->post('source'),
            'wx_id'=>$this->input->post('wx_id'),
            'wx_name'=>$this->input->post('wx_name'),
            'qq'=>$this->input->post('qq'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email'),
            'company'=>$this->input->post('company'),
            'invalid_id'=>'0',
            'recorder'=>$this->input->post('myselect'),
            'position'=>$this->input->post('position'),
            'linephone'=>$this->input->post('linephone'),
            'role_id'=>$this->input->post('myselect1'),
            'product_id'=>$this->input->post('myselect2')
        );

        return $this->db->insert('clients',$data);
    }

    public function exist_clients($name){
        $sql="select * from clients where name like ? and invalid_id = 0";
        $query = $this->db->query($sql,array("%".$name."%"));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function exist_clients_by_phone($phone){
        $sql="select * from clients where phone like ? and invalid_id = 0";
        $query = $this->db->query($sql,array("%".$phone."%"));
        if ($query->num_rows() > 0) {
            return true;
        }else
            return false;
    }

    public function getClient_wx($wx_id){
        $query = $this->db->get_where('clients',array('wx_id'=>$wx_id, 'invalid_id'=>0));
        return $query->row_array();
    }

    public function getClient_name($name){
        $sql="select * from clients where name like ? and invalid_id = 0";
        $query = $this->db->query($sql,array("%".$name."%"));
        return $query->result_array();
    }

    public function modifyClient($wx_id){
        $data=array(
            'wx_id' => $this->input->post('wx_id'),
            'name'=>$this->input->post('name'),
            'wx_name'=>$this->input->post('wx_name'),
            'qq'=>$this->input->post('qq'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email'),
            'company'=>$this->input->post('company'),
            'invalid_id'=>'0',
            'position'=>$this->input->post('position'),
            'linephone'=>$this->input->post('linephone'),
            'role_id'=>$this->input->post('myselect1'),
            'product_id'=>$this->input->post('myselect2')
        );
        $id = $wx_id;
        return $this->db->update('clients',$data, array('id' => $id));
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
                $phone = $row['D'];
                if ($phone == null || $phone == ""){
                    continue;
                }
                if ($this->exist_clients_by_phone($phone)){
                    $temp0=array(
                        'name'=>$row['A'],
                        'wx_id'=>$row['B'],
                        'wx_name'=>$row['C'],
                        'qq'=>$row['E'],
                        'phone'=>$row['D'],
                        'address'=>$row['F'],
                        'email'=>$row['G'],
                        'company'=>$row['H'],
                        'position'=>$row['I'],
                        'linephone'=>$row['J'],
                        'role_id'=>$row['K'],
                        'product_id'=>$row['L'],
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
                    'position'=>$row['I'],
                    'linephone'=>$row['J'],
                    'role_id'=>$row['K'],
                    'product_id'=>$row['L'],
                    'source'=>'网络收集导入',
                    'recorder'=>'刘星池',
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


    public function deleteClient($id){
        $data=array(
            'invalid_id'=>'1'
        );
        return $this->db->update('clients',$data, array('id' => $id));
    }
}