<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['name']);
    unset($_SESSION['surname']);
    unset($_SESSION['date']);
    unset($_SESSION['password']);
    unset($_SESSION["role"]);    
    unset($_SESSION['id']);
    unset($role);
    header("Location: ../../index.php");
    exit;
?>