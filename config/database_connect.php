<?php
    define("SERVER_HOST", "localhost");
    define("SERVER_NAME", "root");
    define("SERVER_PASSWORD", "");
    define("DATABASE_NAME", "habit_tracker");


    $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD);
    
    if ($data_base -> connect_error) {
        die("data_baseection failed: " . $data_base -> connect_error);
    }
    $data_base -> query("CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME);

    $data_base -> close();
?>