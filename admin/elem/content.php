<?php


if (isset($_GET['show'])){
            switch  ($_GET['show']){
                case "phones":
                    $_SESSION['table'] = 'phones';
                    include "elem/seeCategory.php";
                    break;
                case "books":
                    $_SESSION['table'] = 'books';
                    include "elem/seeCategory.php";
                    break;
                case "addProducts":
                      include ("elem/addProducts.php");
                break;
                case "products":
                         $_SESSION['table'] = 'products';
                    include "elem/seeCategory.php";
                break;
                case "clothe":
                         $_SESSION['table'] = 'clothe';
                    include "elem/seeCategory.php";
                break;
                                }
                }

            if (isset($_GET['delete'])) {
               include "elem/delete.php";
            }
            if (isset($_GET['update'])) {

                include "elem/update.php";
                var_dump($_GET);
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