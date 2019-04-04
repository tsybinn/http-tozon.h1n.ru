<?php
//require_once "../Interface/Iuser.php";
//
//
// class User implements Iuser {
//
//public function singUp()
//{
//
//}
//
// }

if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submitReg'])){
    $user->singUp();
}




$login = '';
$password = '';
$confirm = '';
$email = "";
$errorEmail= '';
$DateOfBirth = '';

$error = 'ddtlbnt';
$errorlogin = 'ddtlbnt';
$errorPassword = ' ddtlbnt';
$errorConfirm = 'ddtlbnt';
$errorUser = 'ddtlbnt';



$host = "localHost";
$dbname = "gbook";
$user = "root";
$password = "";


try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
       $db->exec("set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("INSERT INTO msgs (name,password,email) VALUES (:name,:password, :email)");


    $stmt -> execute(array('name'=>'perfect', 'password'=>'ih','email'=>'cymntgh@bbt.ru'));

}
catch(PDOException $e) {
    echo $e->getMessage();
}

//    $stmt = $db->prepare("SELECT * FROM msgs WHERE name=? AND password=?");
//    $stmt->bindValue(1, 'valera', PDO::PARAM_STR);
//    $stmt->bindValue(2, '2222', PDO::PARAM_INT);


   // $stmt->bindValue(1, 'dima', PDO::PARAM_STR);
   // $stmt->bindValue(2, '2221', PDO::PARAM_INT);


   // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//      foreach($rows as $elem){
//
//          echo "$elem[name]";
//          echo "$elem[password] .  <hr>";




     // }

   // ;




//  $sql = "SELECT * FROM msgs WHERE name='valera' AND password=2222";
//
//
//    $stmt = $db->query($sql);
////Установка fetch mode
//    $stmt->setFetchMode(PDO::FETCH_ASSOC);
//
//    var_dump($stmt);
//    while($row = $stmt->fetch())
//    {
//        echo "<p>" . $row['name'] . "&nbsp;" . $row['password'] . "</p>";
//
//    }

  //if ($user == 0)






               // echo $sql;















?>



<div class="formRegister">
    <form   method="POST" action=""  novalidate>
        <h3>Регистрация</h3>
        <div class="login">
            <p>login: <?=$errorlogin?></p>
                <input   type="login" name="login" value="<?=$login?>" placeholder="">

        </div>


        <div class="email">
            <p>email: <?=$errorEmail?></p>
            <input  type="email" name="email"
                    value="<?=$email?>" placeholder="">

        </div>


        <div class="password">
            <p>password:<?=$errorPassword?></p>
            <input  type="password" name="password"  value="<?=$password?>">

        </div>
        <div class="confirm">
            <p>confirm: <?=$errorConfirm?>
            <input  type="password" name="confirm"
                    value="<?=$password?>">


            <div class="submit">
                <input class="submit" type="submit" name="submitReg" value="Register">
            </div>

        </div>






    </form>
</div>




