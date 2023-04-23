<?php
    require_once('db.php');

    $sql = "SELECT * FROM `data`";
    $result = $con -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💰</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">
            老王愛說笑
        </h1>
    </div>

    <div class="container">
        <table class="table table-striped table-borderrer">
            <tr>
                <th>標題</th>
                <th>日期</th>
            </tr>

            <?php
                if($result -> num_rows >0){
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>