<?php

class Client extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('client_model');
		$this->load->database();
		//load pagination library
        $this->load->library('pagination');
        //per page limit
        $this->perPage = 50;
	}

	public function Client_display()
	{
		//table
        $data = array();
    
        //get rows count
        $conditions['returnType'] = 'count';
        $totalRec = $this->client_model->getRowsClientDetails($conditions);
        
        //pagination config
        $config['base_url']    = base_url().'client/Client_display/index/';
        $config['uri_segment'] = 4;
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        //styling
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="pg-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="pg-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        //initialize pagination library
        $this->pagination->initialize($config);
        
        //define offset
        $page = $this->uri->segment(4);
        $offset = !$page?0:$page;
        
        //get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        $data['posts'] = $this->client_model->getRowsClientDetails($conditions);

		$this->load->view('templates/header');
		$this->load->view('client/Client_display', $data);
		$this->load->view('templates/footer');
	}

	public function Client_addForm()
	{
		$this->load->view('templates/header');
		$result['client'] = $this->client_model->getClientList();
		$this->load->view('client/Client_addForm', $result);
		$this->load->view('templates/footer');
		if($this->input->post('Client_addDetailsButton'))
		{
			// ------------------------------------- SAVE FROM INPUT --------------------------------------
			$client = $this->input->post('client');
	    	$terminal_id = $this->input->post('terminal_id');
	    	$asset_id = $this->input->post('asset_id');
	    	$remark = $this->input->post('remark');
	    	$contract_start = $this->input->post('contract_start');
	    	$contract_end = $this->input->post('contract_end');
	    	$customer_name = $this->input->post('customer_name');
	    	$customer_address = $this->input->post('customer_address');
	    	$state = $this->input->post('state');
	    	$units = $this->input->post('units');
	    	$contact_person = $this->input->post('contact_person');
	    	$email = $this->input->post('email');
	    	$tel_no = $this->input->post('tel_no');
	    	$fax_no = $this->input->post('fax_no');
	    	$assign_ip = $this->input->post('assign_ip');
	    	$login = $this->input->post('login');
	    	$password = $this->input->post('password');
	    	// ---------------------------------------- INTO MODEL -----------------------------------------
			$this->client_model->Client_addForm($client, $terminal_id, $asset_id, $remark, $contract_start, $contract_end, $customer_name, $customer_address, $state, $units, $contact_person, $email, $tel_no, $fax_no, $assign_ip, $login, $password);
			header('location: http://localhost/codeigniter/client/Client_display');
		}
	}

	public function Client_update()
	{
		$terminal_id = $this->input->get('terminal_id');
		$this->load->view('templates/header');
		$result['data'] = $this->client_model->Client_displayTerminal($terminal_id);
		$result['client'] = $this->client_model->getClientList();
		$this->load->view('client/Client_updateForm', $result);
		$this->load->view('templates/footer');

		if($this->input->post('Client_updateButton'))
		{
			$client = $this->input->post('client');
	    	$terminal_id = $this->input->post('terminal_id');
	    	$asset_id = $this->input->post('asset_id');
	    	$remark = $this->input->post('remark');
	    	$contract_start = $this->input->post('contract_start');
	    	$contract_end = $this->input->post('contract_end');
	    	$customer_name = $this->input->post('customer_name');
	    	$customer_address = $this->input->post('customer_address');
	    	$state = $this->input->post('state');
	    	$units = $this->input->post('units');
	    	$contact_person = $this->input->post('contact_person');
	    	$email = $this->input->post('email');
	    	$tel_no = $this->input->post('tel_no');
	    	$fax_no = $this->input->post('fax_no');
	    	$assign_ip = $this->input->post('assign_ip');
	    	$login = $this->input->post('login');
	    	$password = $this->input->post('password');

	    	$this->client_model->Client_update($client, $terminal_id, $asset_id, $remark, $contract_start, $contract_end, $customer_name, $customer_address, $state, $units, $contact_person, $email, $tel_no, $fax_no, $assign_ip, $login, $password);
	    	header('location: http://localhost/codeigniter/client/Client_display');
		}
	}

	public function Client_delete()
	{
		$terminal_id = $this->input->get('terminal_id');
	    $this->client_model->Client_delete($terminal_id);
	    header("location:http://localhost/codeigniter/client/Client_display");
	}

	/* ---------------------------------------- CLIENT ----------------------------------------*/

	public function Client_addClient()
	{
		$this->load->view('templates/header');
		$result['data'] = $this->client_model->Client_displayClient();
		$this->load->view('client/Client_addClient', $result);
		$this->load->view('templates/footer');
		if($this->input->post('Client_addButton'))
		{
			$name = $this->input->post('name');
			$this->client_model->Client_addClient($name);
			header('location: http://localhost/codeigniter/client/Client_display');
		}
	}

	public function Client_deleteClient()
	{
		$name = $this->input->get('name');
	    $this->client_model->Client_deleteClient($name);
	    header("location:http://localhost/codeigniter/client/Client_addClient");
	}

	public function Client_displayTableClient()
	{
		$this->load->view('templates/header');
		$result['data'] = $this->client_model->Client_displayClient();
		$this->load->view('client/Client_displayClient', $result);
		$this->load->view('templates/footer');
	}
}