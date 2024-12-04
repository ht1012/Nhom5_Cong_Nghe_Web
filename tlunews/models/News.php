<?php
require_once 'config/connDB.php';

class News
{

    //Lay tat ca tin tuc
    public static function getAllNews()
    {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT * FROM news");
        return $stmt->fetchAll();
    }

    public static function getNewsById($id)
    {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}