<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Upload extends CI_Controller
{
    public function index()
    {
			$this->load->view('templates/header');
			$this->load->view('upload_form');
			$this->load->view('templates/footer');
    }

    public function do_upload()
    {
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width'] = "1024";
		$config['max_height'] = '786';
		
		$this->load->library('upload',$config);
		
		if( !$this->upload->do_upload('userFile') ){
			$error = array( 'error' => $this->upload->display_errors() );
		}
		else{
			$data = array( 'upload_data' => $this->upload->data() );
			header("location:http://localhost/codeigniter/posts");

		}
		
    }
}