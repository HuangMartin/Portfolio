<?php

    if(isset($_POST['submitForm'])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        echo "title: $title <br> date: $date <br> description: $description";
    }else{
        echo "哪裡出錯了QQ";
    }

?>