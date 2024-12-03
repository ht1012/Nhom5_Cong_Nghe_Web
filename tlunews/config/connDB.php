<?php 
class ConnDB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tlunews";
    private $conn = null;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
        if (!$this->conn) {
            die("Connect Fail". mysqli_connect_errno());
        }
    }
    public function getConnection() {
        return $this->conn;
    }
}

?>