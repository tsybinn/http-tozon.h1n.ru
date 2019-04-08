
<!DOCTYPE html>
<html lang="">
<head>
    <title>Test</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header> <a href="?addProduct">Добавить товар</a>    </header>
<content> <?php if (isset($_GET['addProduct'])) {

        include "elem/addProducts.php";

    }?>  </content>
</body>
</html>