<?php

session_start();

require "lib.php";

if (empty($_SESSION['user'])) {
    header("LOCATION: login.php");
}

$userrole = userRole();

$data = Alldata();

require "design/index.php";





















































































/*
session_start();

if(empty($_SESSION['user']))
{
    header("LOCATION: login.php");
}

echo "index";

*/