

<?php





?>
<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Chewy|Love+Ya+Like+A+Sister|Russo+One" rel="stylesheet">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?> </title>
</head>
<body>

<header>

<?php include "header.php";?>

</header>

<main>
    <?php
    if (isset($_GET['signUp'])){
        $content = require('elem/formSignUp.php');
    }?>

    </main>

</body>


</html>