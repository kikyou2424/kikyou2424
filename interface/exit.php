<?php

session_start();
if($_SERVER['REQUEST_METHOD']==='GET'){
    if($_GET['exit']=='true'){
       unset($_SESSION['user_data']); 
    }
    header('location:../index.php');
} 
?>