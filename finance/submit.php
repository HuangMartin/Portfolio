<?php
    require_once('db.php');

    if(isset($_POST['submitForm'])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `data`(`title`, `date`, `description`) 
                VALUES ('$title', '$date', '$description')";
        if($con -> query($sql) === TRUE){
            echo "成功加入資料庫";
        }else{
            echo "哪裡出錯了QQ";
        }
    }else{
        echo "哪裡出錯了QQ";
    }

?>