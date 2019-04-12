<?php

if ( isset($_GET['show']) and $_GET['show'] =='addProducts') {
     include ("elem/addProducts.php");
}

if ( isset($_GET['show']) and $_GET['show'] =='phones') {
     $_SESSION['table'] = 'phones';
    include "elem/seeCategory.php";

}
if ( isset($_GET['show']) and $_GET['show'] =='books') {
    $_SESSION['table'] = 'books';

    include "elem/seeCategory.php";
}


if (isset($_GET['delete'])) {
    include "elem/delete.php";
}


if (isset($_GET['update'])) {

    include "elem/update.php";

}


?>