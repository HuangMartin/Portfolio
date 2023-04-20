<?php

if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['subject']) && isset($_POST['msg'])){
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $subject = validate($_POST['subject']);
    $msg = validate($_POST['msg']);

    if (empty($name) || empty($email) || empty($msg)){
        header("Location: index.php");
    }else{
        $sql = "INSERT INTO portfolio(name, email, subject ,msg) VALUES('$name', '$email', '$subject', '$msg')";
        $res = mysqli_query($conn, $sql);

        if ($res){
            echo "成功送出信件!";
            header("");

        }else{
            echo "哪裡出錯了QQ";
        }
    }

}else{
    header("Location: index.php");
}