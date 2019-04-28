<?php

$title = "SING UP";

$error = [
    'write' => ['login' => '', 'password' => '', 'email' => '', 'confirm' => ''],
    'border' => ['login' => '', 'password' => '', 'email' => '', 'confirm' => ''],


];

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitReg'])) {

    $login = $user->clear($_POST['login']);
    $email = $user->clear($_POST['email']);
    $password = $user->clear($_POST['password']);
    $confirm = $user->clear($_POST['confirm']);

    if (preg_match
        ("#^[0-9-a-zA-Z-.]#", $login) == false) {
        $error['border']['login'] = 'error';
        $error['write']['login'] = ' input login only latins symbol';
    }
    if (empty($login)) {

        $error['border']['login'] = 'error';
        $error['write']['login'] = 'input login';
    }

    if (4 > strlen($login) or
        strlen($login) > 10) {
        $error['border']['login'] = 'error';
        $error['write']['login'] = 'input 4< login < 10';
    }

    if (empty($password)) {

        $error['border']['password'] = 'error';
        $error['write']['password'] = 'input password';

    }

    if (empty($email)) {
        $error['border']['email'] = 'error';
        $error['write']['email'] = 'input email';
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $error['border']['email'] = 'error';
        $error['write']['email'] = "input correct email";
    }
    if ($password !== $confirm) {
        $error['border']['confirm'] = 'error';
        $error['write']['password'] = " password do not match ";
        $password = md5($_POST['password']);
    }

    $password = md5($password);
//var_dump($error);
    if (!in_array ( 'error',$error['border']) ){

        if ( $user->singUp($login, $email, $password)) {

            header("Location: index.php?show=signUpOk");

        } else
            $error['border']['login'] = 'error';
        $error['write']['login']= 'user with such login exists';

   }

}

?>

<div class="formRegister">
    <form method="POST" action="" novalidate>
        <h3>Регистрация</h3>
        <div class="login">
            <p>login: <span class="inputEr"> <?= $error['write']['login'] ?></span></p>
            <input class="<?=$error['border']['login'] ?>" type="login" name="login" value="<?php if (isset($_POST['submitReg']))
                echo $login; ?>" placeholder="">

        </div>


        <div class="email ">
            <p>email: <span class="inputEr"><?= $error['write']['email'] ?></span></p>
            <input class="<?= $error['border']['email'] ?>" type="email" name="email"
                   value="<?php if (isset($_POST['submitReg'])) echo $email; ?>" placeholder="">

        </div>


        <div class="password">
            <p>password:<span class="inputEr"><?= $error['write']['password'] ?></span></p>
            <input class="<?=$error['border']['password'] ?>" type="password" name="password" value="">

        </div>
        <div class="confirm">
            <p>confirm:<span class="inputEr"> <?= $error['write']['confirm'] ?></span></p>
            <input class="<?= $error['border']['password'] ?>" type="password" name="confirm"
                   value="">


            <div class="singUpSubmit">
                <input class="singUpSubmit" type="submit" name="submitReg" value="Sign Up">
            </div>

        </div>

    </form>
</div>




