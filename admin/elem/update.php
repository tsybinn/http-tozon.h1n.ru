<?php
$description="";
$price = "";
$errorC = "";
$errorD = "";
$errorP = "";
$errorF = "";
$errorCategory = "";
$errorDescription = "";
$errorPrice = "";
$errorFile = "";
$table = $_SESSION['table'];
$id = $_GET['update'];

$row = $db->selectById($table,$id);

$price = $row['price'];
$description = $row['description'];

   //var_dump($row);

$selectPh = "";
 $selectP = "";
 $selectC = "";
 $selectB = "";

 switch ($table){
     case "phones":
         $selectPh = "selected";
         break;
     case "books":
         $selectB = "selected";
         break;
         case "products":
             $selectP = "selected";
         break ;
     case "clothe":
         $selectC = "selected";
         break;
 }

if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submitUpdateProduct'])){

    //$table = $_SESSION['table'];
    $category = $db->clear($_POST['category']);
    $description = $db->clear($_POST['description']);
    $price = $db->clear($_POST['price']);
    $id = $_GET['update'];
    $uploadfile = $row['photoUrl'];

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
        $errorPrice = "  заполните цену";
    }




    if (empty($errorC) and empty($errorD) and empty($errorP) and empty($errorF)) {

        if (isset ($_FILES['photo']['type'])){
            $type = $_FILES['photo']['type'];
            if(  $type !== 'image/jpeg' ){
                echo $type;
                $errorF = 'errorP';
                $errorFile = "загрузите картинку в формате jpg";

            }else{
                $salt = mt_rand(1, 9000);
                $name = $salt . $_FILES['photo']['name'];
                $url = "img/";
                $uploadfile = $url . $name;

                move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadfile);
            }
        }

        $db->update($table,$id,$category,$description,$price,$uploadfile);
        $_SESSION['headerInfo'] = 'Вы изменили  товар: ' . $row['description'];

        header("location: admin.php?update=$id");


}}


    $content = "

<div class='wrappleUpdate'>

    <div class=\"seeProduct\">
        <div class=\"seePhoto\"><img src=\"$row[photoUrl]\" width=\"200\"height=\"150\"></div>
        <div class=\"seePrise\"><p>$row[price] &#x584;</p>
        </div>
        <div class=\"seeDiscription\">$row[description]</div>
        <div class='control'>
            <div class='delete'><a href=\"?delete=$row[id]\">delete</a></div>
            <div class='update'><a href=\"?update=$row[id]\">update</a></div>
        </div>

    </div>

    <div class=\"updateProducts\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">

            <select class=\" updateSelect $errorC \"  name=\"category\">
                <p> $errorCategory </p>
                <option value=\"0\">Выберите категорию</option>
                <option $selectPh value=\"1\">Телефоны</option>
                <option $selectP value=\"2\">Продукты</option>
                <option $selectC value=\"3\">Одежда</option>
                <option $selectB value=\"4\">Книги</option>
            </select>

            <label><p>Описание товара: $errorDescription</p> </label>

            <textarea class=\"textareaAddProduct  $errorD \" name=\"description\"
            value = \"\">  $description </textarea>
            <div class=\"fotoPrice\">
            
                <lable>Цена товара:</lable>

                <input class=\"priceProductAdd = $errorP \" type=\"text\" name=\"price\"
                value=\" $price \"  >$errorPrice
                

                <p>фото товара:  $errorFile 
                 <div class=\"seePhoto\"><img src=\"$row[photoUrl]\"   width=\"200\"height=\"150\"></div>
                    <input class=\"addFoto\" type=\"file\" name=\"photo\"></div>
            <input class=\"submitAddProduct\" type=\"submit\" name=\"submitUpdateProduct\" value=\"Изменить\"> </p>


        </form>
    </div>
</div>";
echo $content;