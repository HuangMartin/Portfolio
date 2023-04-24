<?php
    require_once('db.php');

    if(isset($_GET['id']) && isset($_POST['editForm'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        $sql = "UPDATE `data` SET
                `title`='$title',
                `date`='$date',
                `description`='$description' 
                WHERE id = $id";
        if($con -> query($sql) === TRUE){
            echo "成功更新資料庫";
        }else{
            echo "哪裡出錯了QQ";
        }

    }else{
        echo "invalid";
    }
?>