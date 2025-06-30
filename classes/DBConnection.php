<?php
class DBConnection{

    private $host = "localhost";
    private $username = "root";
    private $password = ""; // Set this to your actual MySQL root password, or leave empty if there is none
    private $database = "url_shortener";
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>