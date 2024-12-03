<?php
require_once 'config.php';

class News
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    //Lay tat ca tin tuc
    public function getAllNews()
    {
        $stmt = $this->conn->prepare("SELECT news.*, categories.name
        AS category_name FROM news 
        JOIN categories ON news.category_id = categories.id");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lay tin tuc theo id
    public function getNewsById($id)
    {
        $stmt = $this->conn->prepare("SELECT news.*, categories.name
        AS category_name FROM news 
        JOIN categories ON news.category_id = categories.id
        WHERE news.id = ?");

        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
