<?php

class Database{
   
    // specify your own database credentials
    private $host = "sg2plvcpnl478200";
    private $db_name = "vcard_db";
    private $username = "esteam_user";
    private $password = "easteamcards@123";
    public $conn;
   
    // get the database connection
    public function getConnection(){
   
        $this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // echo "Connection successfull";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}
// $database = new Database();
// $db = $database->getConnection(); //for creating object and accessing connection of database.
