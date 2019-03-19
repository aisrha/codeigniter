<?php
    class Terminal extends CI_Controller
    {
        public function __construct()
        {
            //call CodeIgniter's default Constructor
            parent::__construct();
            //load database libray manually
            $this->load->database();
            //load Model
            $this->load->model('terminal_model');
            //load pagination library
            $this->load->library('Ajax_pagination');
            //per page limit
            $this->perPage = 50;
        }

        public function index()
        {
            $data = array();
        
            //total rows count
            $totalRec = count($this->terminal_model->getRows());
            
            //pagination configuration
            $config['target']      = '#postList';
            $config['base_url']    = base_url().'terminal/ajaxPaginationDataTerminal';
            $config['total_rows']  = $totalRec;
            $config['per_page']    = $this->perPage;
            $config['link_func']   = 'searchFilter';
            $this->ajax_pagination->initialize($config);
            
            //get the posts data
            $data['posts'] = $this->terminal_model->getRows(array('limit'=>$this->perPage));
            
            //load the view
            $this->load->view('templates/header');
            $this->load->view('terminal/index', $data);
            $this->load->view('templates/footer');
        }

        public function ajaxPaginationDataTerminal()
        {
            $conditions = array();
        
            //calc offset number
            $page = $this->input->post('page');
            if(!$page){
                $offset = 0;
            }else{
                $offset = $page;
            }
            
            //set conditions for search
            $keywords = $this->input->post('keywords');
            $sortBy = $this->input->post('sortBy');
            if(!empty($keywords)){
                $conditions['search']['keywords'] = $keywords;
            }
            if(!empty($sortBy)){
                $conditions['search']['sortBy'] = $sortBy;
            }
            
            //total rows count
            $totalRec = count($this->terminal_model->getRows($conditions));
            
            //pagination configuration
            $config['target']      = '#postList';
            $config['base_url']    = base_url().'terminal/ajaxPaginationDataTerminal';
            $config['total_rows']  = $totalRec;
            $config['per_page']    = $this->perPage;
            $config['link_func']   = 'searchFilter';
            $this->ajax_pagination->initialize($config);
            
            //set start and limit
            $conditions['start'] = $offset;
            $conditions['limit'] = $this->perPage;
            
            //get posts data
            $data['posts'] = $this->terminal_model->getRows($conditions);
            
            //load the view
            $this->load->view('terminal/terminalList', $data, false);
        }
    }