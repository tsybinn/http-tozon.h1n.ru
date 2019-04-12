
<!DOCTYPE html>
<html lang="">
<head>

    <title>Test</title>
    <link rel="stylesheet" href="css/style.css"></head>
<body>
<header> <?php include "elem/header.php";?>  </header>
<content> <?php if (isset($_GET['addProduct'])) {

        include "elem/addProducts.php";

        }
        if (isset($_GET['seePhone'])){

            include "elem/seePhone.php";
            //$_SESSION['login'] = 'admin';
            $_SESSION['table'] = 'phones';
        }
        if (isset($_GET['del'])){

            include "elem/seePhone.php";
        }

        if (isset($_GET['delete'])){

            include "elem/delete.php";

        }

    ?>  </content>
</body>
</html>