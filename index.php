<?php

session_start();

require_once "elem/User.class.php";
$user = new User;
$title = "TEST";
//$content = "";

//require_once "elem/User.class.php";

if(isset($_GET['logout'])){

    unset($_SESSION[auth]);
    header ('location: index.php');
}

require "elem/layout.php";






