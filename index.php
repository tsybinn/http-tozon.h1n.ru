<?php

session_start();

require_once "class/User.class.php";
require_once "class/db.php";
$user = new User;
$db = new Db;
$title = "TEST";
if(isset($_GET['logout'])){

    unset($_SESSION[auth]);
    header ('location: index.php');
}

require "elem/layout.php";





