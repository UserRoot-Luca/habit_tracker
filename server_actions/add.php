<?php
    require "../config/database_connect.php";
    if(isset($_GET["text"])){
        $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD, DATABASE_NAME);
        $data_base -> query("
            INSERT INTO `". TABLE_NAME ."` (text) VALUES ('".trim($_GET["text"])."')
        ");
    
        $data_base -> close();
    }
    header("location: ../index.php");
?>