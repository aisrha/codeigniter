<?php
    class Terminal_model extends CI_Model
    {
        function getRows($params = array())
        {
            $this->db->select('*');
            $this->db->from('customer');
            //filter data by searched keywords
            if(!empty($params['search']['keywords'])){
                $this->db->like('terminal_id',$params['search']['keywords']);
            }
            //sort data by ascending or descending order
            if(!empty($params['search']['sortBy'])){
                $this->db->order_by('terminal_id',$params['search']['sortBy']);
            }else{
                $this->db->order_by('terminal_id','asc');
            }
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            //return fetched data
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
    }