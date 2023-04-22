<?php

    $conn = mysqli_connect("localhost", "root", "", "finance notes");


    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
        Not able establisg Datavase Connection</h3>";
    
    }
?>