<?php
if (!isset($_GET['id'])) {
    die('id not provided');
}
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `data` where id = $id";
$result = $con->query($sql);
if ($result->num_rows != 1) {
    die('id is not in db');
}
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>💰-編輯貼文</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar">
        <a class="logo">💰</a>
        <div class="nav-links">
            <ul>
                <li><a href="http://localhost/Portfolio/finance/index.php">新增貼文</a></li>
                <li><a href="http://localhost/Portfolio/finance/show.php">查看所有貼文</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">
            老王愛說笑
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="modify.php?id=<?= $id ?>" method="POST">
                    <h3>您正在編輯頁面!!</h3>
                    <div class="form-group">
                        <label for="title">標題</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?= $data['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="date">日期</label>
                        <input type="date" class="form-control" name="date" id="date" value="<?= $data['date'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">內文</label>
                        <textarea class="form-control" name="description" id="description" cols="42" rows="15"><?= $data['description'] ?></textarea>
                    </div>
                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</body>

</html>