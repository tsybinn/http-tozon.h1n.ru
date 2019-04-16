<?php
session_start();
require_once "../class/db.php";
$db = new Db;
if (isset($_GET['show'])) {
    switch ($_GET['show']) {
        case "phones":
            $title = "Phones";
            break;
        case "books":
            $title = "Books";
            break;
        case "(int)":
            $title = "update";
            break;
        case "addProducts":
            $title = "AddProduct";
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
        case "cheap":
            $title = "Cheap";
            break;
        case "expensive":
            $title = "Expensive";
            break;

    }
} else {
    $title = "AdminPhp";
}
if (isset($_GET['update'])) {
    $title = "update";
}
include "page/layout.php";





