<?php 
    session_start();
    if(empty($_SESSION['user'])){
        header('location: ./admin/login.php');
    }elseif($_SESSION['role']=='Administrator' || $_SESSION['role']=='Editor' ){
        header('location: ./admin/index.php');
    }else{
        header('location: ./article/index.php');
    }
    session_unset();
?>