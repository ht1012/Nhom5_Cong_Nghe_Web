<?php
require_once '../config/ConnDB.php';
class News
{
    public static function getAllNews() {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT news.*, categories.name
            AS category_name FROM news 
            JOIN categories ON news.category_id = categories.id");
        return $stmt->fetchAll();
    }

    public static function getNewsById($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT news.*, categories.name
            AS category_name FROM news 
            JOIN categories ON news.category_id = categories.id
            WHERE news.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

}
?>