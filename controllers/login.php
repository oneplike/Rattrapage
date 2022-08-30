<?php
//condition si il est déjà connecter rediriger vers la page d'acceuil ! Sinon on continue

class LoginController
{
    public static function get()
    {

        include __DIR__ . "/../view/login.php";
    }

}