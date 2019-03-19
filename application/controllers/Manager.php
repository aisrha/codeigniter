<?php

class Manager extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Manager_Model');
		$this->load->helper('url');
	}

	public function complaintForm()
	{
		$this->load->view('templates/header');
		$this->load->view('manager/userReportForm');
		$this->load->view('templates/footer');
	}
}