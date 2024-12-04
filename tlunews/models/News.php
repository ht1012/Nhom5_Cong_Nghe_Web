<?php
require_once 'config/connDB.php';

class News
{
    //Lay tat ca tin tuc
    public static function getAll()
    {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT n.*, c.name AS category_name 
                          FROM news n
                          LEFT JOIN categories c ON n.category_id = c.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Trả về mảng các tin tức
    }


    public static function getById($id)
    {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT n.*, c.name AS category_name 
                              FROM news n
                              LEFT JOIN categories c ON n.category_id = c.id
                              WHERE n.id = :id");
        $stmt->execute(['id' => $id]); // Truy vấn với tham số $id
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về bản ghi đầu tiên
    }
}
