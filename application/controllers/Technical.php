<?php

class Technical extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Technical_Model');
		$this->load->helper('url');
	}

	public function complaintForm()
	{
		$this->load->view('templates/header');
		$this->load->view('technical/userReportForm');
		$this->load->view('templates/footer');
	}
}