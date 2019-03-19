<?php
class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function loginForm()
    {
        $this->load->view('templates/header');
        $this->load->view('login_form');
        $this->load->view('templates/footer');

        if($this->input->post('loginButton'))
        {
            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));
            $que=$this->db->query("select * from techsupport where username='".$username."' and techsupport_password='".$password."'");
            $row = $que->num_rows();

            if(count($row) > 0)
            {
                header("location:http://localhost/codeigniter/");
            }
            else
            {
                $this->load->view('templates/header');
                echo 'ERROR TO LOGIN';
                $this->load->view('templates/footer');
            }	
        }
    }
}
?>