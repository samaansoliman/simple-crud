<?php 

session_start();
require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

// echo $_GET['id'];die;


$userid =$_SESSION['user']['id'];
if($userid ==$_GET['id']){
    echo"you can not remove your self";

}else{
    $res = deleteUser( $_GET['id']);
if($res == true){
    header("LOCATION: index.php");
    }

}


