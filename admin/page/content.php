<?php

if (isset($_GET['show'])) {
    unset ($_SESSION['default']);
    switch ($_GET['show']) {
        case "phones":
            $_SESSION['table'] = 'phones';
            include "elem/seeCategory.php";
            break;
        case "books":
            $_SESSION['table'] = 'books';
            include "elem/seeCategory.php";
            break;
        case "addProducts":
            include("elem/addProducts.php");
            break;
        case "products":
            $_SESSION['table'] = 'products';
            include "elem/seeCategory.php";
            break;
        case "sale":
            $_SESSION['table'] = 'sale';
            include "elem/seeCategory.php";
            break;
        case "clothe":
            $_SESSION['table'] = 'clothe';
            include "elem/seeCategory.php";
            break;
        case "users":
            $_SESSION['table'] = 'users';
            include "elem/showUsers.php";
            break;
        case "users":
            $_SESSION['table'] = 'users';
            include "elem/seeCategory.php";
            break;
        case "cheap":
            $_SESSION['default'] = 'Цена сверху дешевле';
            $_SESSION['order'] = "ORDER BY price ";
            include "elem/seeCategory.php";
            break;
        case "expensive":
            $_SESSION['order'] = "ORDER BY price DESC";
            $_SESSION['default'] = 'Цена сверху дороже';

            include "elem/seeCategory.php";
            break;

    }
}
if (isset($_GET['sorting'])) {

    switch ($_GET['sorting']) {
        case "cheap":
            $_SESSION['default'] = 'Цена сверху дешевле';
            include "elem/seeCategory.php";
            break;
        case "expensive":
            $_SESSION['default'] = 'Цена сверху дороже';
            include "elem/seeCategory.php";
            break;


    }
}

if (isset($_GET['delete'])) {
    include "elem/delete.php";
}
if (isset($_GET['update'])) {

    include "elem/update.php";
    //var_dump($_GET);
}


//if ( isset($_GET['show']) and $_GET['show'] =='addProducts') {
//     include ("elem/addProducts.php");
//}
//
//if ( isset($_GET['show']) and $_GET['show'] =='phones') {
//     $_SESSION['table'] = 'phones';
//    include "elem/seeCategory.php";
//
//}
//if ( isset($_GET['show']) and $_GET['show'] =='books') {
//    $_SESSION['table'] = 'books';
//
//    include "elem/seeCategory.php";
//}
//
//

//
//

//
//}


?>




