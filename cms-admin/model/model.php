<?php
class DbConfig 
{    
   private $_host = 'localhost';
    private $_username = 'u579718332_amitacadeuser';
    private $_password = '>q3FU6+4bDuu';
    private $_database = 'u579718332_amitacademy_db';
    
    protected $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}
?>