<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

  public function setting_main(){

    date_default_timezone_set('Asia/Bangkok');
    $date =  date('Y-m-d H:i:s');
    $query = $this->db->query("SELECT * FROM  setting WHERE public_time <= '$date'");
    if ($query->num_rows() > 0) {
      $update = array(
        "status" => '0',
      );
      $this->db->update('setting', $update);
      $query = $this->db->query("SELECT * FROM  setting");
      $data['settings'] = $query->row();
    }else{
      $update = array(
        "status" => '1',
      );
      $this->db->update('setting', $update);
      $query = $this->db->query("SELECT * FROM  setting");
      $data['settings'] = $query->row();
    }
    $this->load->view('layouts/header');
    $this->load->view('setting/setting-main', $data);
    $this->load->view('layouts/footer');
  }


  public function update(){
    $update = array(
      "public_time" => $this->input->post("datetime"),
    );
    $this->db->update('setting', $update);
    redirect('setting/setting_main');
  }

  // public function manual(){
  //   $update = array(
  //     "public_time" => $this->input->post("datetime"),
  //     "status" => '2',
  //   );
  //   $this->db->update('setting', $update);
  //   redirect('setting/on_off');
  // }

}