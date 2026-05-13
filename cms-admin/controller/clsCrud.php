<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/cms-admin/model/model.php';
date_default_timezone_set('Asia/Kolkata');
error_reporting(0);
 
class Crud extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getData($query)
    {        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
        
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
    
    public function delete($id, $table, $clmname) 
    { 
        $query = "DELETE FROM $table WHERE ".$clmname." = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
	
	public function executelastId($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
			$lastId = $this->connection->insert_id;
            return $lastId;
        }        
    }
	
	public function countRec($query) 
    {         
        $result = $this->connection->query($query);
    	//print_r($result);exit;
        if ($result == false) {
            echo 'Error: cannot execute query ';
            return false;
        } else {
			$row = $result->fetch_array();
            return $row;
        }
    }
 
    public function escape_string($value)
    {
		$value = trim(htmlentities(strip_tags($value))); 
		$value = stripslashes($value); 
        return $this->connection->real_escape_string($value);
    }
}
?>