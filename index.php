<?php

session_start();

require_once "class/User.class.php";
$user = new User;
$title = "TEST";
if(isset($_GET['logout'])){

    unset($_SESSION[auth]);
    header ('location: index.php');
}

require "elem/layout.php";






