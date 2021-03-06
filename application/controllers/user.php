<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function main()
    {

        $query = $this->db->from("setting")
        ->join('setting_result as sr', 'setting.id = sr.s_id')
        ->order_by("setting.created_at desc")
        ->get();
        $data['settings'] = $query->result();
        $this->load->view('layouts/header');
        $this->load->view('main/main', $data);
        $this->load->view('layouts/footer');
    }
    public function listbank()
    {
        $this->load->view('layouts/header');
        $this->load->view('main/listbank');
        $this->load->view('layouts/footer');
    }
    public function deposit()
    {
        $this->load->view('layouts/header');
        $this->load->view('main/deposit');
        $this->load->view('layouts/footer');
    }
    public function showuser()
    {
        $this->load->view('layouts/header');
        $this->load->view('main/showuser');
        $this->load->view('layouts/footer');
    }
    public function showmain()
    {

        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y-m-d H:i:s');
        $query = $this->db->from("setting")->order_by("setting.created_at desc")->get();
        if ($query->num_rows() > 0) {
          $row = $query->row();
          $id = $row->id;
          if($row->public_time <= $date){
            $update = array(
              "status" => '0',
            );
            $this->db->update('setting', $update, array('id' => $id));
            $query = $this->db->from("setting")->order_by("setting.created_at desc")->get();
            $data['settings'] = $query->row();
          }else{
            $update = array(
              "status" => '1',
            );
            $this->db->update('setting', $update, array('id' => $id));
            $query = $this->db->from("setting")->order_by("setting.created_at desc")->get();
            $data['settings'] = $query->row();
          }
            
        } 
        $this->load->view('layouts/header');
        $this->load->view('main/showmain', $data);
        $this->load->view('layouts/footer');
    }
    public function register()
    {
        $this->load->view('layouts/header');
        $this->load->view('main/register');
        $this->load->view('layouts/footer');
    }
    public function login()
    {
        $this->session->sess_destroy();
        redirect('user/main');
    }
    public function insert()
    {
        $username = $this->input->post('username');
        $password = $this->input->post("password");
        $confirm_pass = $this->input->post("conpass");
        $query = $this->db->query("SELECT * FROM user WHERE username='$username'");
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('error', 'มีผู้ใช้นี้แล้ว');
            redirect('user/register');
        } else {
            if ($password != $confirm_pass) {
                $this->session->set_flashdata('error', 'รหัสผ่าน และ ยืนยันรหัสผ่านไม่ตรงกัน');
                redirect('user/register');
            } else {
                $data = array(
                    "b_id" => $this->input->post("b_id"),
                    "l_phone" => $this->input->post("l_phone"),
                    "l_name" => $this->input->post("l_name"),
                    "l_numbank" => $this->input->post("l_numbank"),
                    'status' => '1',
                    'userType' => '1',
                    "username" => $this->input->post("username"),
                    "password" => ($password),
                    // "password" => md5($password),

                );
                $this->db->insert('user', $data);

                redirect('user/showuser');
            }

        }

    }
    public function checklogin()
    {
        $username = $this->input->post('username');
        //$password = md5($this->input->post('password'));
        $password = ($this->input->post('password'));
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $usernames = $row->username;

            $userType = $row->userType;

            $this->session->set_userdata('l_id', $row->l_id);
            $this->session->set_userdata('username', $usernames);
            $this->session->set_userdata('userType', $userType);

            redirect('user/showmain');

            //redirect(base_url('welcome'));
        } else {
            $this->session->sess_destroy();
            echo "<script>alert('Username หรือ Password ไม่ถูกต้อง!');</script>";
            echo "<script type='text/javascript'>window.location.href = \"http://localhost/lottery/index.php/user/main\";</script>";
            exit();
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
