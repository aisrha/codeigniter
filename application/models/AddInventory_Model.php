<?php
class AddInventory_Model extends CI_Model 
{
    // --------------------------------------------- DISPLAY HARDWARE-----------------------------------------------------

    // Display CPU
    function getRowsCPU($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_cpu');
        if(array_key_exists("name",$params))
        {
            $this->db->where('name',$params['name']);
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

    // Display Monitor
    /*function Monitor_display()
    {
        $query=$this->db->query("select * from ref_monitor order by id desc");
        return $query->result();
    }*/
    function getRowsMonitor($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_monitor');
        if(array_key_exists("name",$params)){
            $this->db->where('name',$params['name']);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }
            elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }
            else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }

    // Display Mouse
    /*function Mouse_display()
    {
        $query=$this->db->query("select * from ref_mouse order by id desc");
        return $query->result();
    }*/
    function getRowsMouse($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_mouse');
        if(array_key_exists("name",$params))
        {
            $this->db->where('name',$params['name']);
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

    // Display Keyboard
    /*function Keyboard_display()
    {
        $query=$this->db->query("select * from ref_keyboard order by id desc");
        return $query->result();
    }*/
    function getRowsKeyboard($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_keyboard');
        if(array_key_exists("name",$params))
        {
            $this->db->where('name',$params['name']);
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

    // Display Printer
    /*function Printer_display()
    {
        $query=$this->db->query("select * from ref_printer order by id desc");
        return $query->result();
    }*/
    function getRowsPrinter($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_printer');
        if(array_key_exists("name",$params))
        {
            $this->db->where('name',$params['name']);
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

    // Display Others
    /*function Others_display()
    {
        $query=$this->db->query("select * from ref_others order by id desc");
        return $query->result();
    }*/
    function getRowsOthers($params = array())
    {
        $this->db->select('*');
        $this->db->from('ref_others');
        if(array_key_exists("name",$params))
        {
            $this->db->where('name',$params['name']);
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

    // --------------------------------------------- SAVE -----------------------------------------------------

    // Save CPU
    function CPU_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_cpu', $data);
    }

    // Save Monitor
    function Monitor_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_monitor', $data);
    }

    // Save Mouse
    function Mouse_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_mouse', $data);
    }

    // Save Keyboard
    function Keyboard_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_keyboard', $data);
    }

    // Save Printer
    function Printer_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_printer', $data);
    }

    // Save Others
    function Others_save($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        $this->db->insert('ref_others', $data);
    }

    // --------------------------------------------- UPDATE -----------------------------------------------------

    // Update CPU
    function CPU_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_cpu SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update CPU
    function CPU_displayByID($id)
    {
        $query = $this->db->query("select * from ref_cpu where id='".$id."'");
        return $query->result();
    }

    // Update Monitor
    function Monitor_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_monitor SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update Monitor
    function Monitor_displayByID($id)
    {
        $query = $this->db->query("select * from ref_monitor where id='".$id."'");
        return $query->result();
    }

    // Update Mouse
    function Mouse_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_mouse SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update Mouse
    function Mouse_displayByID($id)
    {
        $query = $this->db->query("select * from ref_mouse where id='".$id."'");
        return $query->result();
    }

    // Update Keyboard
    function Keyboard_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_keyboard SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update Keyboard
    function Keyboard_displayByID($id)
    {
        $query = $this->db->query("select * from ref_keyboard where id='".$id."'");
        return $query->result();
    }

    // Update Printer
    function Printer_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_printer SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update Printer
    function Printer_displayByID($id)
    {
        $query = $this->db->query("select * from ref_printer where id='".$id."'");
        return $query->result();
    }

    // Update Others
    function Others_update($name,$id,$timestamp)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timestamp = date('Y-m-d H:i:s');
        $query=$this->db->query("update ref_others SET name='$name', timestamp = '".$timestamp."' where  id='".$id."'");
    }

    // Get by ID for update Others
    function Others_displayByID($id)
    {
        $query = $this->db->query("select * from ref_others where id='".$id."'");
        return $query->result();
    }

    // --------------------------------------------- DELETE -----------------------------------------------------

    // Delete CPU
    function CPU_delete($id)
    {
        $this->db->query("delete from ref_cpu where id = '".$id."'");
    }

    // Delete Monitor
    function Monitor_delete($id)
    {
        $this->db->query("delete from ref_monitor where id = '".$id."'");
    }

    // Delete Mouse
    function Mouse_delete($id)
    {
        $this->db->query("delete from ref_mouse where id = '".$id."'");
    }

    // Delete Keyboard
    function Keyboard_delete($id)
    {
        $this->db->query("delete from ref_keyboard where id = '".$id."'");
    }

    // Delete Printer
    function Printer_delete($id)
    {
        $this->db->query("delete from ref_printer where id = '".$id."'");
    }

    // Delete Others
    function Others_delete($id)
    {
        $this->db->query("delete from ref_others where id = '".$id."'");
    }

    // --------------------------------------------- SOFTWARE-----------------------------------------------------------
    // Display Software
    /*function software_display()
    {
        $query=$this->db->query("select * from t_software order by KOD desc");
        return $query->result();
    }*/
    function getRowsSoftware($params = array())
    {
        $this->db->select('*');
        $this->db->from('t_software');
        if(array_key_exists("KOD",$params))
        {
            $this->db->where('KOD',$params['KOD']);
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

    // Save Software
    function Software_save($KOD,$NAME)
    {
        $data = array(
            'KOD' => $KOD,
            'NAME' => $NAME
        );
        $this->db->insert('t_software', $data);
    }

    //Delete System
    function deleteSoftwareDB($KOD)
    {
        $this->db->query("delete from t_software where KOD='".$KOD."'");
    }

    // Update System
    function Software_update($KOD,$NAME)
    {
        $query=$this->db->query("update t_software SET NAME = '".$NAME."' where  KOD='".$KOD."'");
    }

    // Get by ID for update 
    function Software_displayByKod($KOD)
    {
        $query = $this->db->query("select * from t_software where KOD='".$KOD."'");
        return $query->result();
    }


     // --------------------------------------------- SERIAL NUMBER -----------------------------------------------------

    // Display Serial Number
    function serial_display($KODSOFTWARE)
    {
        $query=$this->db->query("select * from t_serial_no where KODSOFTWARE='".$KODSOFTWARE."'");
        return $query->result();
    }

    //Insert
    function saveserial($KODSOFTWARE,$NAME)
    {
        $data = array(
        'KODSOFTWARE' => $KODSOFTWARE,
        'NAME' => $NAME,
        );
        $this->db->insert('t_serial_no', $data); 
    }

    //Delete Serial
    function deleteSerialDB($NAME)
    {
        $this->db->query("delete from t_serial_no where NAME='".$NAME."'");
    }

    //Update Record
    function update_records($NAME,$OLDNAME)
    {
        $query=$this->db->query("update t_serial_no SET NAME = '".$NAME."' where NAME='".$OLDNAME."'");
    }

    function displayrecordsByName($NAME)
    {
        $query=$this->db->query("select * from t_serial_no where NAME='".$NAME."'");
        return $query->result();
    }
    // --------------------------------------------- END OF FILE -----------------------------------------------------
}
?>