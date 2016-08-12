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
        $this->load->helper('date');

        // 标题不显示，也不录入，用其他信息拼接出一个标题
        $nowTime = ''.date(DATE_ATOM, now('Asia/shanghai'));
        $content = $this->input->post('content');
        $origin = $this->input->post('mySelect1');
        $category = $this->input->post('mySelect2');
        $remark = $this->input->post('mySelect3');
        $titleStr = substr($nowTime,0,16).'_'.$category."_".substr($content,0,20);


        $data = array(

            'title' => $titleStr,
            'content' => $content,
            'origin' => $origin,
            'category' => $category,
            'remark'=> $remark,
            'invalid_id'=>'0',
        );

        return $this->db->insert('messages', $data);
    }

    public function get_messages($id){
        $query = $this->db->get_where('messages',array('id'=>$id, 'invalid_id'=>'0'));
        return $query->row_array();
    }

    public function get_allmessages(){
        $query = $this->db->get_where('messages',array('invalid_id'=>'0'));;
        return $query->result_array();
    }

    public function exist_messages_title($id){
        $query = $this->db->get_where('messages',array('id'=>$id, 'invalid_id'=>'0'));
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

    public function delete_message($id){
        $data=array(
            'invalid_id'=>'1'
        );
        return $this->db->update('messages',$data, array('id' => $id));
    }


    public function importMessages(){
        $this->load->helper('url');

        /** Include path **/
        set_include_path(get_include_path() . PATH_SEPARATOR . './PHPExcel/');

        /** PHPExcel_IOFactory */
        include 'PHPExcel/IOFactory.php';
//        $name = url_title($this->input->post('name'),'dash',true);
        $inputFileName = './upload/message.xls';
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        $insertData = array();
        $updateData = array();
        if (sizeof($sheetData) > 0)
        {
            foreach ($sheetData as $row) {
                $content = $row['A'];
                $publish_time=$row['B'];
                $category=$row['C'];
                $titleStr = $publish_time.'_'.$category."_".substr($content,0,20);
                if ($content == null || $content == ""){
                    continue;
                }
                $temp1=array(
                    'title'=>$titleStr,
                    'content'=>$content,
                    'publish_time'=>$publish_time,
                    'category'=>$category,
                    'valid_time'=>'0',
                    'times_number'=>'1',
                    'origin'=>'微信',
                    'recorder'=>'高磊',
                    'invalid_id'=>'0',
                    'remark'=>$category,
                    'type'=>'plain',
                );
//                $time = strtotime("2010-09-08");
//                echo date("Y-m-d H:i:s",$time);
                array_push($insertData, $temp1);
            }
        }
        $this->db->trans_start();
        if (sizeof($insertData)){
            $this->db->insert_batch('messages',$insertData);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }else
            return true;
    }
}