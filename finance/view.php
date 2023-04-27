<?php
require_once('db.php');

$sql = "SELECT * FROM `data`";
$result = $con->query($sql);
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">💰</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/Portfolio/finance/index.php">新增貼文</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Portfolio/finance/show.php">查看所有貼文</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">
            老王愛說笑
        </h1>
    </div>

    <div class="container mt-5">
        <?php foreach ($result as $q) { ?>
            <div>
                <h1><?php echo $q['title']; ?></h1>
            </div>
            <p><?php echo $q['date']; ?></p>
            <p><?php echo nl2br($q['description']); ?></p>
        <?php } ?>
    </div>
</body>

</html>