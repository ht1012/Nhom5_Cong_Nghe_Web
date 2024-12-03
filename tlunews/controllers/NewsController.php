<?php
require_once 'models/News.php';
class NewsController
{
    private $newsModel;

    public function __construct($conn)
    {
        $this->newsModel = new News($conn);
    }

    //Hien thi danh sach tin tuc
    public function index()
    {
        $newsList = $this->newsModel->getAllNews();
        require 'views/news/index.php';
    }
}
