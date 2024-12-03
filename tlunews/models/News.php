<?php
require_once '../config/ConnDB.php';
class News
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

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

    public function update($id, $title, $content, $image, $category_id)
    {
        $stmt = $this->conn->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
        return $stmt->execute([$title, $content, $image, $category_id, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM news WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>