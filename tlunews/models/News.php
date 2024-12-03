<?php
require_once 'config.php';

class News
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    //Hien thi danh sach tin tuc

    public function index() {}
    //Hien thi chi tiet tin tuc
    public function detail($id) {}
}
