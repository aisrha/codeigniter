<?php

class Client_Model extends CI_Model
{
	/* -------------------------------- CLIENT DISPLAY ----------------------------------*/
	/*function Client_display()
	{
		$query = $this->db->query("select * from customer order by terminal_id");
		return $query->result();
	}*/
    function getRowsclientDetails($params = array())
    {
        $this->db->select('*');
        $this->db->from('customer');
        if(array_key_exists("terminal_id",$params))
        {
            $this->db->where('terminal_id',$params['terminal_id']);
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


	function Client_addForm($client, $terminal_id, $asset_id, $remark, $contract_start, $contract_end, $customer_name, $customer_address, $state, $units, $contact_person, $email, $tel_no, $fax_no, $assign_ip, $login, $password)
	{
		$data = array(
        	'client' => $client,
        	'terminal_id' => $terminal_id,
        	'asset_id' => $asset_id,
        	'remark' => $remark,
        	'contract_start' => $contract_start,
        	'contract_end' => $contract_end,
        	'customer_name' => $customer_address,
        	'customer_address' => $customer_address,
        	'state' => $state,
        	'units' => $units,
        	'contact_person' => $contact_person,
        	'email' => $email,
        	'tel_no' => $tel_no,
        	'fax_no' => $fax_no,
        	'assign_ip' => $assign_ip,
        	'login' => $login,
        	'password' => $password
        );
        $this->db->insert('customer', $data);
	}

	function Client_displayTerminal($terminal_id)
	{
		$query = $this->db->query("select * from customer where terminal_id = '".$terminal_id."'");
        return $query->result();
	}

	function Client_update($client, $terminal_id, $asset_id, $remark, $contract_start, $contract_end, $customer_name, $customer_address, $state, $units, $contact_person, $email, $tel_no, $fax_no, $assign_ip, $login, $password)
	{
		$query = $this->db->query("update customer SET client='$client', terminal_id = '$terminal_id', asset_id = '$asset_id', remark = '$remark', contract_start = '$contract_start', contract_end = '$contract_end', customer_name = '$customer_name', customer_address = '$customer_address', state = '$state', units = '$units', contact_person = '$contact_person', email = '$email', tel_no = '$tel_no', fax_no = '$fax_no', assign_ip = '$assign_ip', login = '$login', password = '$password' where  terminal_id = '".$terminal_id."'");
	}

	function Client_delete($terminal_id)
	{
		$this->db->query("delete from customer where terminal_id = '".$terminal_id."'");
	}

	/* ---------------------------------------- CLIENT ----------------------------------------*/

	function Client_addClient($name)
	{
		$data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_client', $data);
	}

	/* ------------------------------------ GET DROPDOWN LIST ------------------------------------*/

	function getClientList()
	{
		$query = $this->db->query("select name from ref_client");
        return $query->result();
	}

    function Client_displayClient()
    {
        $query = $this->db->query("select * from ref_client");
        return $query->result();
    }

    function Client_deleteClient($name)
    {
        $this->db->query("delete from ref_client where name = '".$name."'");
    }
}