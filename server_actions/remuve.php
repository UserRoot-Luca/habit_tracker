<?php
    require "../config/database_connect.php";
    $json = file_get_contents('php://input');
    $res = json_decode($json, true);

    if ($res != null) {
        $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD, DATABASE_NAME);
        $data_base -> query("DELETE FROM ".TABLE_NAME." WHERE id = ".$res["id"]."; ");
        $data_base -> close();
    }
    header("location: ../index.php");
?>