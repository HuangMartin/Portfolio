<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Blog</title>
</head>
<body>
    <div class="container mt-5">

        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    成功發布新貼文!
                </div>
            <?php } ?>
        <?php } ?>
        
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">發布新貼文</a>
        </div>

        <div class="row">

            <?php foreach($query as $q){?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo $q['content'];?></p>
                            <a href="view.php"class="btn btn-light">Read More<span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
        <?php } ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
</body>
</html>