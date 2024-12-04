<?php
require_once 'config/connGB.php';

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
        $stmt = $db->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
