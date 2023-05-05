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
    <title>💰查看所有貼文</title>
    <link rel="icon" href="img/money.png" type="image/x-icon">
    <link rel="stylesheet" href="finance.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
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
        <h1 class="text-center">卡爾先生</h1>
    </div>

    <div class="cards">
        <?php foreach ($result as $q) { ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $q['title']; ?></h5>
                    <p class="card-date"><?php echo $q['date']; ?></p>
                    <p class="card-des"><?php echo nl2br($q['description']); ?></p>
                    <div class="btn-group">
                        <a class="btn btn-secondary" href="edit.php?id=<?php echo $q['id'] ?>">編輯</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $q['id'] ?>">刪除</a>
                    </div>
                    <a href="view.php?id=<?php echo $q['id'] ?>">Read More</a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- <div class="container">
        <div class="pagination">
            <li class="page-item previous-page disable"><a class="page-link" href="#">上一頁</a></li>
            <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">7</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
            <li class="page-item next-page"><a class="page-link" href="#">下一頁</a></li>
        </div>
    </div> -->

</body>

</html>