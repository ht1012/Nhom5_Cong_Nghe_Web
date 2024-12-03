<?php
    include("config/connDB.php");
    $connDB = new connDB();
$conn = $connDB->getConnection();

if ($conn) {
    echo "Connected successfully";
}else{
    echo "Connected fail";
}
?>