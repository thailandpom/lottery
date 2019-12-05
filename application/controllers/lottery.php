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
}