<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


session_start();
require_once "class/User.class.php";
require_once "class/db.php";
$user = new User;
$db = new Db;

if (isset($_GET['logout'])) {

    unset($_SESSION[auth]);
    unset ($_SESSION['cart']);
    unset($_SESSION['countCart']);
    header('location: index.php');
}

if (isset($_GET['show'])) {
    switch ($_GET['show']) {
        case "signIn":
            $title = "Вход";
            break;
        case "signUp":
            $title = "Регистрация";
            break;
        case "phones":
            $title = "Phones";
            break;
        case "books":
            $title = "Books";
            break;
        case "products":
            $title = "Products";
            break;
        case "clothe":
            $title = "Clothe";
            break;
        case "users":
            $title = "seeUsers";
            break;
        case "expensive":
            $title = "Expensive";
            break;
        case "sale":
            $title = "Распродажа";
            break;
    }
} else {
    $title = "Tozon";
}
require "elem/layout.php";


