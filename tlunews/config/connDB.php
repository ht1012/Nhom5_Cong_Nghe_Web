<?php
class connDB{
    private static $conn = null;
    public static function getConnection()
    {
        if(self::$conn === null){
            try{
                self::$conn = new PDO('mysql:host = localhost; dbname = tlunews','root','',[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            }catch(PDOException $e){
                die("Connection failed:". $e->getMessage());
            }
        }
        return self::$conn;
    }
}