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
// };
fgtr
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
}
catch(PDOException $e) {
    echo $e->getMessage();
}












?>


<form method="POST" action="">
    <div class="form-group">
        <label for="login"></label>
        <input type="email" class="form-control border border-danger " name="login" aria-describedby="emailHelp"
               placeholder="login">
        <small name="emailHelp" class="form-text text-muted "
        </small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Enter email">
        <small name="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control  error" name="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control error" name="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            to register
        </button>
    </div>


</form>



</body>
</html>



