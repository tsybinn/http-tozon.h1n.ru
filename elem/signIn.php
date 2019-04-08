
<?php
$errorL = "";
$errorP = "";
$errorlogin = "";
$errorPassword = "";
//$error = [];
if (isset($_SERVER['REQUEST_METHOD']) == "POST" and  isset($_POST['submitIn'])){

    $login = $user->clear($_POST['login']) ;
    $password = $user->clear($_POST['password']);

    if(empty($login)){
        $errorL = 'errorL';
        $errorlogin =  ' input login';

    }

    if(empty($password)){
        $errorP = 'errorP';
        $errorPassword =  ' input password';
    }
        if(!empty($login)) {
            if ($user->singIn($login, $password) == true) {
                header("Location: index.php");
            } else {
                $errorL = 'errorL';
                $errorlogin = 'login unknow';
            }

        }





}



?>

<div class="formsignIn border">
    <form   method="POST" action=""  novalidate>
        <h3>Вход</h3>
        <div class="login">
            <p>login: <span class="inputEr"> <?=$errorlogin?></span></p>
            <input class="<?=$errorL?>"   type="login" name="login" value="<?php  if(isset($_POST['singInSubmit']))
                echo $login;?>" placeholder="">

        </div>

        <div class="password">
            <p>password:<span class="inputEr"><?=$errorPassword?></span></p>
            <input class="<?=$errorP?>" type="password" name="password"  value="">

        </div>
        <div class="linksSignUp ">
            <a class="forgotPass" href="#"><span>Забыли пароль</span></a>
            <a class="linkSignUp" href="?signUp"><span>Зарегистрироваться</span></a>
        </div>
        <div class="singInSubmit">
                <input class="singInSubmit" type="submit" name="submitIn" value="Sign In">
            </div>
        </div>






    </form>
</div>








