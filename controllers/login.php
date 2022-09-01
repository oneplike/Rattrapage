<?php
//condition si il est déjà connecter rediriger vers la page d'acceuil ! Sinon on continue

include __DIR__."/../models/user.php";
require_once "controllers/auth.php";

//verifie si il y a une connexion en cours



if (isset($_POST["email"]) &&
    isset($_POST["pwd"])
){
    $email = strtolower(trim($_POST["email"]));
    $pwd = trim($_POST["pwd"]);


    LoginController::check( $email, $pwd);
}

class LoginController
{
    public static function get()
    {
        if(isConnected()){
            header('Location: dashboard');
            exit();
        }
        include __DIR__ . "/../view/login.php";
    }

    public static function logout()
    {

        session_start();
        unset($_SESSION['connect']);
        header('Location: home');
    }

    public static function check(string $email,string $pwd )
    {
        $user = UserModel::getOneByEmail($email); //Cherche l'utilisateur en fonction de son adresse mail

        if (!$user) { //Si l'utilisateur n'existe pas
            $msg_error="Email n'existe pas !";
            include __DIR__ . "/../view/login.php";
            return;
        }

        if (!password_verify($pwd, $user["passwd"])) { //Si le mot de passe est mauvais
            $msg_error="Mot de passe incorrect !";
            include __DIR__ . "/../view/login.php";
            return;
        }

        $token = bin2hex(random_bytes(16));

        UserModel::updateOneById($user["idUser"], ["token" => $token]);
        session_start();
        $_SESSION['connect'] = 1;
        $_SESSION['idUser'] = $user["idUser"];
        header('Location: dashboard');
    }
}