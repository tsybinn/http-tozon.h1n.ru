<?php

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

    if (preg_match
        ("#^[0-9-a-zA-Z-.]#",$login) == false){
        $errorL = 'errorL';
        //echo  'only latins sumbol';
        $errorlogin =  ' input login only latins sumbol';
    }
    if(empty($login)){

        $errorL = 'errorL';
        $errorlogin =  'input login';
            }

    if (4 > strlen($login) or
        strlen($login) > 10){
        $errorL = 'errorL';
        $errorlogin = 'input 4< login < 10';
    }

    if(empty($password)){

        $errorP = 'errorP';
        $errorPassword =  'input password';

    }

    if(empty($email)){
        $errorE = 'errorE';
        $errorEmail =  'input email';
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $error = "class=\"errorm\"";
        $errorEmail = "input correct email";
    }
    if ( $password !== $confirm){
        $errorC = "errorC";
        $errorPassword = " password do not match ";
        $password =  md5( $_POST['password']);
    }

        $password = md5($password);

    if (empty($errorC) and empty($errorL) and empty ($errorP) and empty($errorE)){

        if (!$user->singUp($login,$email,$password)) {

            $errorL = 'errorL';
            $errorlogin =  'user with such login exists';
        } else



        header("Location: index.php?show=signUpOk");
    }

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




