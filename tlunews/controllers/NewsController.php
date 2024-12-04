
<?php
require_once 'models/News.php';

class NewsController {
    public function index() {
        $news = News::getAllNews();
        include 'views/news/index.php';
    }

    public function detail($id) {
        $news = News::getNewsById($id);
        include 'views/news/detail.php';
    }
}
