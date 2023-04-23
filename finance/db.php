<?php
    $server = "localhost";
    $user = "root";
    $pass = "";

    $con = new mysqli($server, $user, $pass, "finance notes");
    
    if($con -> connect_error){
        die("哪裡出錯了QQ");
    }else{
        echo "連線成功!!";
    }
?>