<?php
class Posts extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();
        //load database libray manually
        $this->load->database();
        //load Model
        $this->load->model('post_model');
        //load pagination library
        $this->load->library('pagination');
        $this->load->library('Ajax_pagination');
        //per page limit
        $this->perPage = 15;
    }
    //main function
    public function index()
    {
        $data = array();

        //get rows count
        $conditions['returnType'] = 'count';
        $totalRec = $this->post_model->getRowsAdmin($conditions);

        //pagination config
        $config['base_url']    = base_url('posts/index'); 
        $config['uri_segment'] = 3;
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
        $page = $this->uri->segment(3);
        $offset = !$page?0:$page;

        //get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        $data['posts'] = $this->post_model->getRowsAdmin($conditions);

        $this->load->view('templates/header');
        $this->load->view('admin/posts_form');
        //$result['data']=$this->post_model->display_records();
        $this->load->view('admin/display_records',$data);
        $this->load->view('templates/footer');
    }

    //Add Technical
    public function savedata()
    {
        //load registration view form
        $this->load->view('templates/header');
        $this->load->view('admin/add_form');
        $this->load->view('templates/footer');
        //Check submit button 
        if($this->input->post('save'))
        {
            $techsupportname=$this->input->post('name');
            $username=$this->input->post('username');
            $techsupport_password = $this->input->post('password');
            $techsupportemail=$this->input->post('email');
            $techsupportic=$this->input->post('ic');
            $techsupporttel=$this->input->post('tel');
            $techsupport_group=$this->input->post('group');
            $this->post_model->saverecords($techsupportname,$username,$techsupport_password,$techsupportemail,$techsupportic,$techsupporttel,$techsupport_group);                   
            header("location:http://localhost/codeigniter/posts/");
            //echo "Records Saved Successfully";
        }
    }
    
    //Delete Record
    public function deletedata(){  
        $username=$this->input->get('username');
        $this->post_model->deletedata($username);  
        header("location:http://localhost/codeigniter/posts/");
   }  

    //Update Record
    public function updatedata()
    {
        $email=$this->input->get('techsupportemail');
        $this->load->view('templates/header');
        $result['data']=$this->post_model->displayrecordsById($email);
        $this->load->view('admin/update_records',$result);
        $this->load->view('templates/footer');
        if($this->input->post('update'))
        {
            $techsupportname=$this->input->post('name');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $techsupportemail=$this->input->post('email');
            $techsupportic=$this->input->post('ic');
            $techsupporttel=$this->input->post('tel');
            $techsupport_group=$this->input->post('group');
            $this->post_model->update_records($techsupportname,$username,$password,$techsupportemail,$techsupportic,$techsupporttel,$techsupport_group);
            echo "Data updated successfully !";
            header("location:http://localhost/codeigniter/posts/");
        }
    }

    //Search Record
    public function searchStaff() 
    {
        $data = array();
    
        //total rows count
        $totalRec = count($this->post_model->getRowsSearch());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'posts/ajaxPaginationDataSearch';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['posts'] = $this->post_model->getRowsSearch(array('limit'=>$this->perPage));
        
        //load the view
        $this->load->view('templates/header');
        $this->load->view('admin/search', $data);
        $this->load->view('templates/footer');
    }

    public function ajaxPaginationDataSearch()
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
        $totalRec = count($this->post_model->getRowsSearch($conditions));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'posts/ajaxPaginationDataSearch';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['posts'] = $this->post_model->getRowsSearch($conditions);
        
        //load the view
        $this->load->view('admin/searchList', $data, false);
    }
    
    //Display Attendance Record
    public function displayAtt() 
    {
        $email = $this->input->get('techsupportemail');
        $this->load->view('templates/header');
        $result['data'] = $this->post_model->display_att($email);
        $this->load->view('attendance/attForm', $result);
        $this->load->view('templates/footer');
    }
}