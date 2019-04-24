<?php


$description = "";
$price = "";
$errorC = "";
$errorD = "";
$errorP = "";
$errorF = "";
$errorCategory = "";
$errorDescription = "";
$errorPrice = "";
$errorFile = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitAddProduct'])) {
    $table = $_SESSION['table'];
    $category = $db->clear($_POST['category']);
    $description = $db->clear($_POST['description']);
    $price = $db->clear($_POST['price']);

    if ($category == 0) {
        $errorC = 'errorC';
        $errorCategory = "Выберите категорию";
    }
    if (empty($description)) {
        $errorD = 'errorD';
        $errorDescription = "заполните описание товара";
    }
    if (empty($price)) {
        $errorP = 'errorP';
        $errorPrice = "заполните цену";
    }
    $type = $_FILES['photo']['type'];
    if ($type !== 'image/jpeg') {
        echo $type;


        $errorF = 'errorP';
        $errorFile = "загрузите картинку в формате jpg";
    }


    if (empty($errorC) and empty($errorD) and empty($errorP) and empty($errorF)) {
        $salt = mt_rand(1, 9000);

        $name = $salt . $_FILES['photo']['name'];
        $url = "img/";
        $uploadfile = $url . $name;
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadfile)) {

            echo '<br> added to file1 system';
        }


        switch ($category) {
            case 1:
                $table = "phones";
                break;
            case 2:
                $table = "products";
                break;
            case 3:
                $table = "clothe";
                break;
            case 4:
                $table = "books";
                break;
            case 5:
                $table = "sale";
                break;
        }

        if ($db->insert($table, $category, $description, $price, $uploadfile)) {
            $row = $db->lastId($table);

            $_SESSION['headerInfo'] = 'Вы добавили новый товар: ' . $row['description'];

            header("location: admin.php?show=addProducts");

        }


    }
}
?>

<div class="addProducts">
    <form action="" method="post" enctype="multipart/form-data">

        <select class="<?= $errorC ?>" value="2" name="category">
            <p><?= $errorCategory ?></p>
            <option value="0">Выберите категорию</option>
            <option value="1">Телефоны</option>
            <option value="2">Продукты</option>
            <option value="3">Одежда</option>
            <option value="4">Книги</option>
            <option value="5">Распродажа</option>
        </select>

        <label>Описание товара:<?= $errorDescription ?></label>

        <textarea class="textareaAddProduct <?= $errorD ?>" name="description"
                  value=""> <?= $description ?> </textarea>
        <div class="fotoPrice">
            <lable>Цена товара:</lable>

            <input class="priceProductAdd <?= $errorP ?>" type="text" name="price"
                   value="<?= $price ?>"<?= $errorPrice ?>>

            <p>фото товара: <?= $errorFile ?>
                <input class="addFoto" type="file" name="photo"></div>
        <input class="submitAddProduct" type="submit" name="submitAddProduct"></p>


    </form>
</div>
