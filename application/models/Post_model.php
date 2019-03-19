<?php
class Post_model extends CI_Model
{
    //View with Pagination
    function getRowsAdmin($params = array())
    {
        $this->db->select('*');
        $this->db->from('techsupport');
        if(array_key_exists("username",$params))
        {
            $this->db->where('username',$params['username']);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        else
        {
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params))
            {
                $this->db->limit($params['limit'],$params['start']);
            }
            elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params))
            {
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count')
            {
                $result = $this->db->count_all_results();
            }
            else
            {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    
    //Insert
    function saverecords($techsupportname,$username,$techsupport_password,$techsupportemail,$techsupportic,$techsupporttel,$techsupport_group)
    {
        $data = array(
        'techsupportname' => $techsupportname,
        'username' => $username,
        'techsupport_password' => md5($techsupport_password),
        'techsupportemail' => $techsupportemail,
        'techsupportic' => $techsupportic,
        'techsupporttel' => $techsupporttel,
        'techsupport_group' => $techsupport_group  
        );
        $this->db->insert('techsupport', $data); 
    }

    //delete data
    function deletedata($username)
    {  
        $this->db->query("delete from techsupport where username='".$username."'");
    }  


    //Display Update Recoard
    function displayrecordsById($email)
    {
        $query=$this->db->query("select * from techsupport where techsupportemail='".$email."'");
        return $query->result();
    }
    
    //Display Update Recoard
    function update_records($techsupportname,$username,$password,$techsupportemail,$techsupportic,$techsupporttel,$techsupport_group)
    {
        $data = array(
            'techsupportname' => $techsupportname,
            'username' => $username,
            'techsupport_password' => md5($password),
            'techsupportemail' => $techsupportemail,
            'techsupportic' => $techsupportic,
            'techsupporttel' => $techsupporttel,
            'techsupport_group' => $techsupport_group
        );
        $this->db->replace('techsupport', $data); 
    }
    
    //View
    function display_att($email)
    {
        $query=$this->db->query("select * from bessar_attendance where email = '".$email."' order by email");
        return $query->result();
    }

    function getRowsSearch($params = array())
    {
        $this->db->select('*');
        $this->db->from('techsupport');
        //filter data by searched keywords
        if(!empty($params['search']['keywords']))
        {
            $this->db->like('username',$params['search']['keywords']);
        }
        //sort data by ascending or descending order
        if(!empty($params['search']['sortBy']))
        {
            $this->db->order_by('username',$params['search']['sortBy']);
        }
        else
        {
            $this->db->order_by('username','asc');
        }
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params))
        {
            $this->db->limit($params['limit'],$params['start']);
        }
        elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params))
        {
            $this->db->limit($params['limit']);
        }
        //get records
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
}
    
    /*View
    function display_records()
    {
        $query=$this->db->query("select * from techsupport");
        return $query->result();
    }*/

    //SearchByUsername
    /*function getSearchUsername($searchValue) 
    {
        $query=$this->db->query("select * from techsupport where username like '%".$searchValue."%'");
        return $query->result();
    }*/

    //SearchByGroup
    /*function getSearchGroup($searchValue) 
    {
        $query=$this->db->query("select * from techsupport where techsupport_group like '%".$searchValue."%'");
        return $query->result();
    }*/
    
    //SearchByName
    /*function getSearchName($searchValue) 
    {
        $query=$this->db->query("select * from techsupport where techsupportname like '%".$searchValue."%'");
        return $query->result();
    }*/
?>