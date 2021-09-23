<?php 
    require "./config/main_table.php";
    require "./config/database_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./data/css/main.css">
    <link rel="icon" href="./data/img/icons/icon.png" type="image/png">
    <title>Habit Tracker</title>
</head>
<body>
    <div class="main">
        <table class="main_table">
            <tr class="main_table__top">
                <th class="main_table__top__void">######### </th>
                <?php for($i=0; $i<NUMBER_COLUMNS; $i++) echo "<th>".($i+1)."</th>"; ?>
            </tr>
            <tr>
                <th>dsdsds</th>
                <?php for($i=0; $i<NUMBER_COLUMNS; $i++) echo "<th>&nbsp;</th>"; ?>
            </tr>

            <tr>
                <th>dsdsds</th>
                <?php for($i=0; $i<NUMBER_COLUMNS; $i++) echo "<th>&nbsp;</th>"; ?>
            </tr>

            <tr>
                <th>dsdsds</th>
                <?php for($i=0; $i<NUMBER_COLUMNS; $i++) echo "<th>&nbsp;</th>"; ?>
            </tr>

            <tr class="main_table__form">
                <form action="" method = "get">
                    <td><input type="text" name="" required></td>
                    <?php
                        for ($i=0; $i < NUMBER_COLUMNS; $i++) echo "<td><input type='checkbox' disabled></td>";
                    ?>

                </form>
            </tr>

        </table>
    </div>
</body>
</html>