<?php 
class Database {

    public $hostname;
    public $dbname;
    public $username;
    public $password;

    public function __construct($hostname, $dbname, $username, $password){

        $this->hostname = $hostname;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    function conn(){
        try {
            $conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname.'',$this->username,$this->password);
            // set pdo error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connected successfully';
        } catch (PDOException $e) {
            echo 'Connection failed : '.$e->get_message();
        }
    } 

}

?>