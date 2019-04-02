<?php
	class AddInventory extends CI_Controller 
	{
		// Default constructor
		public function __construct()
		{
			// call CodeIgniter's default Constructor
			parent::__construct();
			// load database library manually
			$this->load->database();
			// load Model
			$this->load->model('addinventory_model');
			//load pagination library
                  $this->load->library('pagination');
                  //per page limit
                  $this->perPage = 15;
		}

		// ----------------------------------------- INVENTORY TAB ---------------------------------------------------

            // Display software or hadrware button
		public function displayInv()
            {
			$this->load->view('templates/header');
			$this->load->view('inventory/displayinventory');
			$this->load->view('templates/footer');
		}

		// --------------------------------------------- DISPLAY HARDWARE ----------------------------------------------
		
            // Display list of hardware
		public function displayHardware()
	    {
			$this->load->view('templates/header');
			$this->load->view('inventory/displayhardware');
			$this->load->view('templates/footer');
		}

		// --------------------------------------------- DISPLAY HARDWARE ITEMS ---------------------------------------

		// Display CPU
		public function displayCPU()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsCPU($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayCPU/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsCPU($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->CPU_display();
			$this->load->view('inventory/hardware/CPU_displayTable', $data);
			$this->load->view('templates/footer');
		}

		// Display Monitor
		public function displayMonitor()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsMonitor($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayMonitor/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsMonitor($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->Monitor_display();
			$this->load->view('inventory/hardware/Monitor_displayTable', $data);
			$this->load->view('templates/footer');
		}

		//Display Mouse
		public function displayMouse()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsMouse($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayMouse/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsMouse($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->Mouse_display();
			$this->load->view('inventory/hardware/Mouse_displayTable', $data);
			$this->load->view('templates/footer');
		}

		//Display Keyboard
		public function displayKeyboard()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsKeyboard($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayKeyboard/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsKeyboard($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->Keyboard_display();
			$this->load->view('inventory/hardware/Keyboard_displayTable', $data);
			$this->load->view('templates/footer');
		}

		//Display Printer
		public function displayPrinter()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsPrinter($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayPrinter/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsPrinter($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->Printer_display();
			$this->load->view('inventory/hardware/Printer_displayTable', $data);
			$this->load->view('templates/footer');
		}

		//Display Others
		public function displayOthers()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsOthers($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displayOthers/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsOthers($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->Others_display();
			$this->load->view('inventory/hardware/Others_displayTable', $data);
			$this->load->view('templates/footer');
		}

		// --------------------------------------- SAVE -------------------------------------------------------

		// Save CPU
		public function CPU_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/CPU_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('CPU_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->CPU_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayCPU');
			}
		}

		// Save Monitor
		public function Monitor_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/Monitor_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('Monitor_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->Monitor_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayMonitor');
			}
		}

		// Save Mouse
		public function Mouse_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/Mouse_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('Mouse_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->Mouse_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayMouse');
			}
		}

		// Save Keyboard
		public function Keyboard_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/Keyboard_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('Keyboard_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->Keyboard_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayKeyboard');
			}
		}

		// Save Printer
		public function Printer_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/Printer_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('Printer_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->Printer_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayPrinter');
			}
		}

		// Save Others
		public function Others_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/hardware/Others_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('Others_saveButton'))
			{
				$name = $this->input->post('name');
				$this->addinventory_model->Others_save($name);
				header('location: http://localhost/codeigniter/addinventory/displayOthers');
			}
		}

		// --------------------------------------------- UPDATE -----------------------------------------------------

		// Update CPU
		public function CPU_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->CPU_displayByID($id);
	    	$this->load->view('inventory/hardware/CPU_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('CPU_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->CPU_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayCPU");
			}
		}

		// Update Monitor
		public function Monitor_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->Monitor_displayByID($id);
	    	$this->load->view('inventory/hardware/Monitor_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('Monitor_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->Monitor_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayMonitor");
			}
		}

		// Update Mouse
		public function Mouse_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->Mouse_displayByID($id);
	    	$this->load->view('inventory/hardware/Mouse_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('Mouse_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->Mouse_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayMouse");
			}
		}

		// Update Keyboard
		public function Keyboard_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->Keyboard_displayByID($id);
	    	$this->load->view('inventory/hardware/Keyboard_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('Keyboard_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->Keyboard_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayKeyboard");
			}
		}

		// Update Printer
		public function Printer_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->Printer_displayByID($id);
	    	$this->load->view('inventory/hardware/Printer_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('Printer_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->Printer_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayPrinter");
			}
		}

		// Update Others
		public function Others_update()
		{
			$id = $this->input->get('id');
			$timestamp = $this->input->get('timestamp');
			$this->load->view('templates/header');
	    	$result['data'] = $this->addinventory_model->Others_displayByID($id);
	    	$this->load->view('inventory/hardware/Others_updateForm', $result);
	    	$this->load->view('templates/footer');
	    	if($this->input->post('Others_updateButton'))
	    	{
	    		$name = $this->input->post('name');
	    		$this->addinventory_model->Others_update($name,$id,$timestamp);
				header("location:http://localhost/codeigniter/addinventory/displayOthers");
			}
		}

		// --------------------------------------------- DELETE -----------------------------------------------------

		// Delete CPU
		public function CPU_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->CPU_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayCPU");
	    }
	    // Delete Monitor
		public function Monitor_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->Monitor_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayMonitor");
	    }

	    // Delete Mouse
		public function Mouse_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->Mouse_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayMouse");
	    }

	    // Delete Keyboard
		public function Keyboard_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->Keyboard_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayKeyboard");
	    }

	    // Delete Printer
		public function Printer_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->Printer_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayPrinter");
	    }

	    // Delete Others
		public function Others_delete()
	    {
	    	$id = $this->input->get('id');
	    	$this->addinventory_model->Others_delete($id);
	    	header("location:http://localhost/codeigniter/addinventory/displayOthers");
	    }

	    // ----------------------------------------- SOFTWARE --------------------------------------------------------

		// Display SOFTWARE
		public function displaySoftwareTable()
		{
			//table
                  $data = array();
              
                  //get rows count
                  $conditions['returnType'] = 'count';
                  $totalRec = $this->addinventory_model->getRowsSoftware($conditions);
                  
                  //pagination config
                  $config['base_url']    = base_url().'addinventory/displaySoftwareTable/index/';
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
                  $data['posts'] = $this->addinventory_model->getRowsSoftware($conditions);

			$this->load->view('templates/header');
			//$result['data'] = $this->addinventory_model->software_display();
			$this->load->view('inventory/software/software_displayTable', $data);
			$this->load->view('templates/footer');
		}

		// Save software
		public function Software_save()
		{
			$this->load->view('templates/header');
			$this->load->view('inventory/software/software_addForm');
			$this->load->view('templates/footer');
			if($this->input->post('software_saveButton'))
			{
				$KOD = $this->input->post('KOD');
				$NAME = $this->input->post('NAME');
				$this->addinventory_model->Software_save($KOD,$NAME);
				header('location: http://localhost/codeigniter/addinventory/displaySoftwareTable');
			}
		}

		//Delete Software
            public function deleteSoftware()
            {
                  $KOD=$this->input->get('KOD');
                  $this->addinventory_model->deleteSoftwareDB($KOD);
      		header('location: http://localhost/codeigniter/addinventory/displaySoftwareTable');
      	}
      		
      	// Update Software
      	public function Software_update()
		{
			$KOD = $this->input->get('KOD');
			$NAME = $this->input->get('NAME');
			$this->load->view('templates/header');
      	    	$result['data'] = $this->addinventory_model->Software_displayByKod($KOD);
      	    	$this->load->view('inventory/software/software_updateForm', $result);
      	    	$this->load->view('templates/footer');
      	    	if($this->input->post('software_updateButton'))
	    	      {
                        $NAME = $this->input->post('NAME');
                        $this->addinventory_model->Software_update($KOD,$NAME);
                        header('location: http://localhost/codeigniter/addinventory/displaySoftwareTable');
			}
		}

		// --------------------------------------------- SERIAL NUMBER -----------------------------------------------------


		// Display SerialNumber
		public function displaySerialTable()
		{
			$this->load->view('templates/header');
			$KODSOFTWARE = $this->input->get('KODSOFTWARE');
			$result['data'] = $this->addinventory_model->serial_display($KODSOFTWARE);
			$this->load->view('inventory/software/display_serial', $result);
			$this->load->view('templates/footer');
		}

		//Add Serial Number
		public function save_serial()
		{
			//load registration view form
            $this->load->view('templates/header');
			$this->load->view('inventory/software/add_serial');
            $this->load->view('templates/footer');
			//Check submit button 
			if($this->input->post('Serial_save'))
			{
				$KODSOFTWARE=$this->input->post('KODSOFTWARE');
                $NAME=$this->input->post('NAME');
				$this->addinventory_model->saveserial($KODSOFTWARE,$NAME);					
				header("location:http://localhost/codeigniter/addinventory/displaySerialTable?KODSOFTWARE=".$KODSOFTWARE."");
				//echo "Records Saved Successfully";
			}
		}

		//Delete Serial
        public function deleteSerial()
        {
			$KODSOFTWARE = $this->input->get('KODSOFTWARE');
			$NAME = $this->input->get('NAME');
			$this->addinventory_model->deleteSerialDB($NAME);
			redirect($_SERVER['HTTP_REFERER']);		
		}

		//Update Record
        public function updatedata()
        {
            $NAME=$this->input->get('NAME');
            $this->load->view('templates/header');
            $result['data']=$this->addinventory_model->displayrecordsByName($NAME);
            $this->load->view('inventory/software/update_serial',$result);
            $this->load->view('templates/footer');
            if($this->input->post('serial_updateButton'))
            {
				$KODSOFTWARE=$this->input->post('KODSOFTWARE');
				$OLDNAME=$this->input->get('NAME');
                $NAME=$this->input->post('NAME');
                $this->addinventory_model->update_records($NAME,$OLDNAME);
				header("location:http://localhost/codeigniter/addinventory/displaySerialTable?KODSOFTWARE=".$KODSOFTWARE."");
            }
        }
      	    // ---------------------------------------- END OF FILE -------------------------------------------
      }
?>
		