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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">
            老王愛說笑
        </h1>
    </div>

    <div class="container mt-5">
            <?php foreach($result as $q){?>
                <div>
                    <h1><?php echo $q['title'];?></h1>
                </div>
                <p><?php echo $q['date'];?></p>
                <p><?php echo $q['description'];?></p>
            <?php }?>
    </div>
</body>
</html>