<?php
class Dbh{
    public $hostname = "localhost", 
    $username = "root",
    $password = "",
    $dbname = "zuriphp";
    
    protected function connect(){
        $db =  new mysqli($this->hostname, $this->username, $this->password, $this->dbname); 
       if ($db->connect_error) {
         die("Connection failed: " . $db->connect_error);
    }
    else{
        return $db;
    }
    echo "Connected successfully";  
    }
}
?>