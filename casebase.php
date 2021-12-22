<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'casebasereasoning';
    $conn = new mysqli($server, $user, $password, $database);
    if($conn){
        mysqLi_query($conn , "SETNAME 'utf8' ");
        echo "thanh cong";
    }else{
        echo "loi ket noi";
    }
?>