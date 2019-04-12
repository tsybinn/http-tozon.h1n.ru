
<?php
$error = [
    'write' => ['login' => '', 'password' => '', ],
    'border' => ['login' => '', 'password' => '']
];
if (isset($_SERVER['REQUEST_METHOD']) == "POST" and  isset($_POST['submitIn'])){

    $login = $user->clear($_POST['login']) ;
    $password = $user->clear($_POST['password']);

    if(empty($login)) {
        $error['border']['login'] = 'errorL';
        $error ['write']['login'] = ' input login';

    }

    if(empty($password)){
        $error['border']['password'] = 'errorP';
        $error ['write']['password'] = ' input password';
    }
        if(!empty($login)) {
            if ($user->singIn($login, $password) == true) {
                header("Location: index.php");
            } else {
                $error['border']['login'] = 'errorL';
                $error ['write']['login'] = 'login unknow';

            }

        }
}
?>
<div class="formsignIn border">
    <form   method="POST" action=""  novalidate>
        <h3>Вход</h3>
        <div class="login">
            <p>login: <span class="inputEr"> <?=$error['write']['login']?></span></p>
            <input class="<?=$error['border']['login']?>"   type="login" name="login" value="<?php  if(isset($_POST['singInSubmit']))
                echo $login;?>" placeholder="">

        </div>

        <div class="password">
            <p>password:<span class="inputEr"><?=$error['write']['password']?></span></p>
            <input class="<?=$error['border']['password']?>" type="password" name="password"  value="">

        </div>
        <div class="linksSignUp ">
            <a class="forgotPass" href="#"><span>Забыли пароль</span></a>
            <a class="linkSignUp" href="?show=signUp"><span>Зарегистрироваться</span></a>
        </div>
        <div class="singInSubmit">
                <input class="singInSubmit" type="submit" name="submitIn" value="Sign In">
            </div>
        </div>






    </form>
</div>








