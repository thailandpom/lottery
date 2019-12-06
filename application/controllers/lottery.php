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

    $u_id = $this->session->userdata('l_id');
    $query = $this->db->query("SELECT * FROM tb_money where u_id = '$u_id'");
    
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
        
        $update = array(
            "amount" => $money - $sum,
        );
        $this->db->update('tb_money', $update, array('u_id' => $u_id));
        echo 'success';  
      }
    }
    


  }

  public function test()
   {
    


      echo 'Added successfully.';  
   }
}