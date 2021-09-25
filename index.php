<?php 
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
                <th class="main_table__top__void">&nbsp;</th>
                <?php for($i=0; $i<NUMBER_COLUMNS; $i++) echo "<th>".($i<9 ? "0".$i+1: $i+1)."</th>"; ?>
            </tr>


            <form action="./server_forms/edit.php" method = "get" id="edit">
                <?php
                    $data_base = new mysqli(SERVER_HOST, SERVER_NAME, SERVER_PASSWORD, DATABASE_NAME);
                    $table_data = $data_base -> query("SELECT * FROM ". TABLE_NAME);

                    if ($table_data -> num_rows > 0) {
                        while($row = $table_data -> fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["text"]."</td>";
                            for($i=0; $i<NUMBER_COLUMNS; $i++) {
                                echo "<td class='box' data-type='".$row["day_".($i+1)]."' >

                                <input type='hidden' name='id' value='".$row["id"]."'>
                                <input type='hidden' name='day' value='"."day_".($i+1)."'>
                                <input type='hidden' name='check' value='".$row["day_".($i+1)]."'>

                                </td>";
                            }
                            echo "</tr>";
                        }
                    }
                    $data_base -> close();
                ?>
            </form>


            <tr class="main_table__form">
                <form action="./server_forms/add.php" method = "get">
                    <td><input type="text" name="text" required placeholder="Add new habit" minlength="2" maxlength="50"></td>
                    <?php
                        for ($i=0; $i < NUMBER_COLUMNS; $i++) echo "<td data-type='disabled'><input type='hidden' value='disabled'></td>";
                    ?>
                    <input type="submit" value="Add">
                </form>
            </tr>
        </table>
    </div>
    <script src="./data/js/main.js"></script>
</body>
</html>