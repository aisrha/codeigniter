<?php

class HelpdeskOfficer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HelpdeskOfficer_Model');
		$this->load->helper('url');
	}

	public function complaintForm()
	{
		$this->load->view('templates/header');
		$this->load->view('ho/userReportForm');
		$this->load->view('templates/footer');
	}
}

?>