<?php
class DbConfig 
{    
    private $_host = 'node43118-amit-college.cloudjiffy.net';
    private $_username = 'root';
    private $_password = 'NRCbao92277';
    private $_database = 'amitcollegeorg_amit-college';
    
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