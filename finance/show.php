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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>💰</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">💰</a>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li><a class="active" href="http://localhost/Portfolio/finance/index.php">新增貼文</a></li>
                    <li><a class="active" href="http://localhost/Portfolio/finance/show.php">查看所有貼文</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">
            老王愛說笑
        </h1>
    </div>

    <div class="row">
        <?php foreach ($result as $q) { ?>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="card text-white mt-3">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title"><?php echo $q['title']; ?></h5>
                        <p class="card-text"><?php echo $q['date']; ?></p>
                        <p class="card-text"><?php echo $q['description']; ?></p>
                        <a href="view.php?id=<?php echo $q['id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        <div class="btn-group">
                            <a class="btn btn-secondary" href="edit.php?id=<?php echo $q['id'] ?>">編輯</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $q['id'] ?>">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>