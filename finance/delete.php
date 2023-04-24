<?php
    require_once('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `data` WHERE id = $id";

        if($con -> query($sql) === TRUE){
            echo "成功更新資料庫";
        }else{
            echo "哪裡出錯了QQ";
        }

    }else{
        echo "invalid";
    }
?>