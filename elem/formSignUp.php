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


$title = "SING UP";
$error = '';
$errorL = "";
$errorP = "";
$errorE = "";
$errorC= "";
$errorlogin = '';
$errorPassword = '';
$errorConfirm = '';
$errorEmail = '';
if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submitReg'])){

    $login = $user->clear($_POST['login']);
    $email = $user->clear($_POST['email']);
    $password = $user->clear($_POST['password']);
    $confirm = $user->clear($_POST['confirm']);

    if(empty($login)){

        $errorL = 'errorL';
        $errorlogin =  'input login';
            }

    if (preg_match
        ("#^[0-9-a-zA-Z-.]#",$login) == false){
        $errorL = 'errorL';
        //echo  'only latins sumbol';
        $errorlogin =  ' input login only latins sumbol';
    }

    if(empty($password)){

        $errorP = 'errorP';
        $errorPassword =  'input password';

    } if(empty($email)){

        $errorE = 'errorE';
        $errorEmail =  'input email';

    }

    if ( $password !== $confirm){
        $errorC = "errorC";
        $errorPassword = " password do not match ";

        $password =  md5( $_POST['password']);

    }


    if (empty($errorC) and empty($errorL) and empty ($errorP) and empty($errorE)){

        if (!$user->singUp($login,$email,$password)) {

            $errorL = 'errorL';
            $errorlogin =  'user with such login exists';
        } else

       // echo "ok";

        header("Location: index.php?signUpOk");
    }










     //echo $row_count;



}



?>



<div class="formRegister">
    <form   method="POST" action=""  novalidate>
        <h3>Регистрация</h3>
        <div class="login">
            <p>login: <span class="inputEr"> <?=$errorlogin?></span></p>
                <input class="<?=$errorL?>"   type="login" name="login" value="<?php  if(isset($_POST['submitReg']))
                    echo $login;?>" placeholder="">

        </div>


        <div class="email ">
            <p>email: <span class="inputEr"><?=$errorEmail?></span> </p>
            <input  class="<?=$errorE?>"  type="email" name="email"
                    value="<?php  if(isset($_POST['submitReg'])) echo $email;?>" placeholder="">

        </div>


        <div class="password">
            <p>password:<span class="inputEr"><?=$errorPassword?></span></p>
            <input class="<?=$errorP?>" type="password" name="password"  value="">

        </div>
        <div class="confirm">
            <p>confirm:<span class="inputEr"> <?=$errorConfirm?></span></p>
            <input class="<?=$errorC?>"  type="password" name="confirm"
                    value="">


            <div class="singUpSubmit">
                <input class="singUpSubmit" type="submit" name="submitReg" value="Sign Up">
            </div>

        </div>

    </form>
</div>




