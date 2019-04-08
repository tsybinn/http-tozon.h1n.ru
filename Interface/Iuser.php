<?php


interface Iuser{
    function singUp($login,$email,$password);
    function singIn($login,$password);

}