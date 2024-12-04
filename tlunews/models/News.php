<?php
require_once 'config/connDB.php';

class News
{
    //Lay tat ca tin tuc
    public static function getAll()
    {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT * FROM news");
        return $stmt->fetchAll();
    }

    public static function getById($id)
    {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT news.*, categories.name
        FROM news
        LEFT JOIN categories ON news.category_id = categories.id
        WHERE news.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
