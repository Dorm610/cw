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
//        $this->form_validation->set_rules('title','Title','required');
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
            $result = $this->mMessages->get_allmessages();
            $data['result'] = $result;
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

        // 转发或分享微信时显示缩略图
        switch ($data['messages']['category']){
            case '求购':
                $data['icon']='buy.jpg';
                break;
            case '供应':
                $data['icon']='sell.jpg';
                break;
            case '求车':
                $data['icon']='want_truck.jpg';
                break;
            case '空车':
                $data['icon']='empty_truck.jpg';
                break;
            default:
                $data['icon']='other.jpg';
        }

        $data['title']=substr($data['messages']['content'],0,78).'…';

        $content=$data['messages']['content'];
        $reg = '/[^0-9+]*(?P<tel>(\+86[0-9]{11})|([0-9]{11}))[^0-9+]*/';
        // 用正则表达式找出电话，不能有空格或其他符号
        if (preg_match_all($reg, $content, $mobiles)){
            // 通过两次替换将电话号码替为超链接
            for($i=0;$i<count($mobiles[1]);$i++){
                $phone = $mobiles[1][$i];
                $phone = str_replace($mobiles[1][$i], '<a href="tel:'.$mobiles[1][$i].'">'.$mobiles[1][$i].'</a>', $phone);
                $content = str_replace($mobiles[1][$i], $phone, $content);
            }
        }



        $data['content']=$content;

        $this->load->view('mobile_header',$data);
        $this->load->view('messages/view',$data);
        $this->load->view('mobile_footer',$data);
    }

    /**
     * 删除某项业务信息的详细数据 将invalid_id设成1
     * @param null $id 业务id
     */
    public function delete($id){
        $this->mMessages->delete_message($id);

        $data['title']='Search a new messages';
        $data['base_url']=base_url();

        /**
         * 暂时为可查询到全部业务 后期可添加表单查询
         */
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
     * 微信样式 创建一条业务
     */
    public function createForWEUI(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create a new messages';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
//        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('content','Content','required');

        if ($this->form_validation->run() === false){
            //验证不通过，重新载入
            $this->load->view('WEUI/header',$data);
            $this->load->view('WEUI/messages/create');
        }else{
            $data['success'] = 'create';
            $this->mMessages->set_messages(); //保存数据
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/messages/success'); //跳转页面
        }

    }

    /**
     * 微信样式 查询业务
     */
    public function searchForWEUI(){
        $this->load->helper('form');

        $data['title']='Search a new messages';
        $data['base_url']=base_url();
        /**
         * 暂时为可查询到全部业务 后期可添加表单查询
         */

        if ($this->mMessages->exist_messages()){
            $data['success'] = 'searchall';
            $result = $this->mMessages->get_allmessages();
            $data['result'] = $result;
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/messages/success', $data);
        }
        else {
            $data['success'] = 'searchfail';
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/messages/success', $data);
        }
    }

    /**
     * 微信样式 显示某项业务信息的详细数据
     * @param null $id 业务id
     */
    public function viewForWEUI($id=null){

        $data['messages']=$this->mMessages->get_messages($id);
        $data['base_url']=base_url();
        if (empty($data['messages'])) {
            echo 'wtf no such message:'.$id;
            show_404();
        }

        // 转发或分享微信时显示缩略图
        switch ($data['messages']['category']){
            case '求购':
                $data['icon']='buy.jpg';
                break;
            case '供应':
                $data['icon']='sell.jpg';
                break;
            case '求车':
                $data['icon']='want_truck.jpg';
                break;
            case '空车':
                $data['icon']='empty_truck.jpg';
                break;
            default:
                $data['icon']='other.jpg';
        }

        $data['title']=substr($data['messages']['content'],0,78).'…';

        $content=$data['messages']['content'];
        $reg = '/[^0-9+]*(?P<tel>(\+86[0-9]{11})|([0-9]{11}))[^0-9+]*/';
        // 用正则表达式找出电话，不能有空格或其他符号
        if (preg_match_all($reg, $content, $mobiles)){
            // 通过两次替换将电话号码替为超链接
            for($i=0;$i<count($mobiles[1]);$i++){
                $phone = $mobiles[1][$i];
                $phone = str_replace($mobiles[1][$i], '<a href="tel:'.$mobiles[1][$i].'">'.$mobiles[1][$i].'</a>', $phone);
                $content = str_replace($mobiles[1][$i], $phone, $content);
            }
        }



        $data['content']=$content;

        $this->load->view('WEUI/header',$data);
        $this->load->view('WEUI/messages/view',$data);
    }

    /**
     * 微信样式 删除某项业务信息的详细数据 将invalid_id设成1
     * @param null $id 业务id
     */
    public function deleteForWEUI($id){

        $data['title']='Search a new messages';
        $data['base_url']=base_url();

        /**
         * 暂时为可查询到全部业务 后期可添加表单查询
         */
        if ($this->mMessages->delete_message($id)){
            $data['success'] = 'delete';
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/messages/success', $data);
        }
        else {
            $data['success'] = 'delete_fail';
            $this->load->view('WEUI/header', $data);
            $this->load->view('WEUI/messages/success', $data);
        }
    }


    public function import(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title']='导入信息';
        $data['base_url']=base_url();
        // 为表单设置验证规则，如果不填，数据库值为''，而不是NULL
        $this->form_validation->reset_validation();
        $this->form_validation->set_rules('filename','FileName','required');

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'xlsx|xls';
        $config['max_size']     = 2048;
        $config['file_name']   = 'message.xls';
        $config['overwrite']   = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('filename'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('header',$data);
            $this->load->view('messages/import', $error);
            $this->load->view('footer',$data);
        }
        else
        {
            $result = array('upload_data' => $this->upload->data());
            $data['result'] = $result;
            if ($this->mMessages->importMessages()) {
                $data['success'] = 'import';
            }else {
                $data['success'] = 'import_fail';
            }
            $this->load->view('header', $data);
            $this->load->view('messages/success', $data); //跳转页面
            $this->load->view('footer', $data);
        }

    }

}