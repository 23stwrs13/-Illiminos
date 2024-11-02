<?php
    $connect = new mysqli("localhost", "root", "", "Illiminos");
    if($connect->connect_error){
        die ("Ошибка подключения к базе данных основа");
    }
?>