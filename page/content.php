<?php
if (isset($_GET['show'])){
    unset ($_SESSION['default']);
    switch  ($_GET['show']){
        case "signIn":
           require('elem/SignIn.php');
            break;
        case "books":
            $_SESSION['table'] = 'books';
            require('elem/showCategory.php');
            break;
       case "phones":
            $_SESSION['table'] = 'phones';
           require('elem/showCategory.php');
           break;

      case "clothe":
            $_SESSION['table'] = 'clothe';
           require('elem/showCategory.php');
           break;
   case "products":
            $_SESSION['table'] = 'products';
           require('elem/showCategory.php');
           break;
 case "sale":
            $_SESSION['table'] = 'sale';
           require('elem/showCategory.php');
           break;

        case "cheap":
            $_SESSION['default'] = 'Цена сверху дешевле';
            $_SESSION['order'] = "ORDER BY price ";
            include "elem/showCategory.php";
            break;
        case "expensive":
            $_SESSION['order'] = "ORDER BY price DESC";
            $_SESSION['default'] = 'Цена сверху дороже';

            include "elem/showCategory.php";
            break;


    }
}


if (isset($_GET['sorting'])) {

   switch ($_GET['sorting']) {
        case "cheap":
            $_SESSION['default'] = 'Цена сверху дешевле';
            include "elem/showCategory.php";
            break;
        case "expensive":
            $_SESSION['default'] = 'Цена сверху дороже';
            include "elem/showCategory.php";
            break;


   }
}






?>