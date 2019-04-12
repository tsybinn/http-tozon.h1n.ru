<?php
if (isset($_GET['show'])){
    switch  ($_GET['show']){
        case "signUp":
            $_SESSION['table'] = 'phones';
            require('elem/formSignUp.php');
            break;
        case "signIn":
            $_SESSION['table'] = 'books';
            require ('elem/signIn.php');
            break;
        case "signUpOk":
            require ('elem/SignUpOk.php');
            break;
    }
}






?>