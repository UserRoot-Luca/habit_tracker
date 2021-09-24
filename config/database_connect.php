<?php
    require "main_constants.php";

    $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD);
    $data_base -> query("CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME);
    $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD, DATABASE_NAME);

    $day_list = "";
    for ($i=0; $i < NUMBER_COLUMNS; $i++) { 
        $day_list .= "`day_".($i+1)."` varchar(20) NOT NULL DEFAULT 'false', ";
    }

    $data_base -> query("CREATE TABLE IF NOT EXISTS `".TABLE_NAME."` (
        `id` int not null AUTO_INCREMENT,
        `text` varchar(50), ".
        $day_list
        ."PRIMARY KEY (`id`)
    )");

    $data_base -> close();
?>