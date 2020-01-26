<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lottery extends CI_Controller {
  public function index()
	{
    $setting = $this->db->from("setting")->order_by("setting.created_at desc")->get();
    $data['settings'] = $setting->row();
    date_default_timezone_set('Asia/Bangkok');
    $date =  date('Y-m-d H:i:s');

    if ($setting->num_rows() > 0) {
      $row = $setting->row();
      $id = $row->id;
      if($row->public_time <= $date){
        $update = array(
          "status" => '0',
        );
        $this->db->update('setting', $update, array('id' => $id));
        $this->load->view('layouts/header');
        $this->load->view('lottery/index', $data);
        $this->load->view('layouts/footer');
      }else{
        $update = array(
          "status" => '1',
        );
        $this->db->update('setting', $update, array('id' => $id));
        $this->load->view('layouts/header');
        $this->load->view('lottery/index', $data);
        $this->load->view('layouts/footer');
      }
    }
  	
  }
  public function insert()
  {

    $u_id = $this->session->userdata('l_id');
    $query = $this->db->query("SELECT * FROM tb_money WHERE u_id = '$u_id'");
    
    //Check with user money
    if ($query->num_rows() > 0) {
        $row = $query->row();
        $money = $row->amount;
        $sum = $this->input->post('summary');
        if($sum > $money){
            echo 'fail';  
        }else{
            
        date_default_timezone_set('Asia/Bangkok');
        $data = array(
          "u_id" => $u_id,
          "s_id" => $this->input->post('s_id'),
          "sum" => $sum,
          "created_at" => date('Y-m-d H:i:s'),
          "updated_at" => date('Y-m-d H:i:s'),

        );
        $this->db->insert('tb_order', $data);
        $order_id = $this->db->insert_id();

        $datas = array();
        if (isset($_POST['price'])){
          $array_price = $_POST['price'];
          foreach ($array_price as $key => $value){
            $data2 = array(
              "order_id" => $order_id,
              "s_id" => $this->input->post('s_id'),
              "number" => $this->input->post('num'.$key),
              "perPrice" => $this->input->post('perPrice'.$key),
              "type" => $this->input->post('type'.$key),
              "price" => $value,
            );
            $this->db->insert('tb_order_detail', $data2);
          }
        }   

        if($order_id < 10){
          $o_id = '000000000'.$order_id;
        }else if($order_id < 100) {
          $o_id = '00000000'.$order_id;
        }else if($order_id < 1000) {
          $o_id = '0000000'.$order_id;
        }else if($order_id < 10000) {
          $o_id = '000000'.$order_id;
        }else if($order_id < 100000) {
          $o_id = '00000'.$order_id;
        }else if($order_id < 1000000) {
          $o_id = '0000'.$order_id;
        }else if($order_id < 10000000) {
          $o_id = '000'.$order_id;
        }else if($order_id < 100000000) {
          $o_id = '00'.$order_id;
        }else if($order_id < 1000000000) {
          $o_id = '0'.$order_id;
        }else{
          $o_id = $order_id;
        }

        $update_order = array(
          "o_id" => $o_id,
        );
        $this->db->update('tb_order', $update_order, array('id' => $order_id));
        
        $update = array(
            "amount" => $money - $sum,
        );
        $this->db->update('tb_money', $update, array('u_id' => $u_id));
        
        echo 'success';  
      }
    }
    


  }

  public function transaction()
   {
      $u_id = $this->session->userdata('l_id');
      $order = $this->db->from("setting")
            ->join('tb_order as to', 'setting.id = to.s_id')
            ->where('to.u_id', $u_id)
            ->get();
      $order_details = $this->db->from("tb_order_detail")->get();
      
      $data['orders'] = $order->result();
      $data['details'] = $order_details->result();
      $this->load->view('layouts/header');
      $this->load->view('lottery/transaction', $data);
      $this->load->view('layouts/footer');
   }
}