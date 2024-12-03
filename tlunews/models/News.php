<?php
class News
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
