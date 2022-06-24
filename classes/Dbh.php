<?php
class Dbh{
    public $hostname, 
    $username,
    $password,
    $dbname;
    function __construct(/*$hostname, $username, $password, $dbname*/){
        $this->hostname = "localhost";//$hostname;
        $this->username = "root";//$username;
        $this->password = "";//$password;
        $this->dbname = "zuriphp";//$dbname;
    }
    public function connect(){
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
$db = new Dbh();
 $db->connect();
?>