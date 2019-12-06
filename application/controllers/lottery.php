<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lottery extends CI_Controller {
  public function index()
	{
    $query = $this->db->query("SELECT * FROM user");
    $data['users'] = $query->result();
  	$this->load->view('layouts/header');
    $this->load->view('lottery/index', $data);
    $this->load->view('layouts/footer');
  }
  public function insert()
  {

    //Check with user money
    $money = 100;
    $sum = $this->input->post('summary');
    if($sum > $money){
      echo 'fail';  
    }else{
      date_default_timezone_set('Asia/Bangkok');
      $data = array(
        "member_id" => $this->session->userdata('l_id'),
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
            "number" => $this->input->post('num'.$key),
            "price" => $value,
          );
          $this->db->insert('tb_order_detail', $data2);
        }
      }   
      echo 'success';  
    }
  }

  public function test()
   {
    


      echo 'Added successfully.';  
   }
}