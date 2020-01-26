<?php
class Email_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function index()
    {

        $this->load->helper('form');
        $this->load->view('email_form');
    }

    public function send_mail()
    {

        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'noreplytruedigitalpark@gmail.com';
        $config['smtp_pass'] = 'fsmkrhclbdznzhpf';
        $config['smtp_port'] = 587;
        $config["smtp_crypto"] = "tls";

        $this->email->initialize($config);

        $to = $this->input->post('email');

        $this->email->set_newline("\r\n");
        $this->email->from('support@domain.com', 'Support name'); // change it to yours
        $this->email->to($to); // change it to yours
        $this->email->subject('Test Email');
        $this->email->message('Test send email form');

        if ($this->email->send()) {
            echo "Success! - An email has been sent to " . $to;
        } else {
            show_error($this->email->print_debugger());
            return false;
        }

    }

    public function mypdf()
    {

        $this->load->library('pdf');
        $html = $this->load->view('mypdf', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);

    }

}
