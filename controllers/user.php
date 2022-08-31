<?php
//condition si il est déjà connecter rediriger vers la page d'acceuil ! Sinon on continue
include __DIR__."/../models/user.php";

if (isset($_POST["firstname"]) &&
    isset($_POST["lastname"]) &&
    isset($_POST["birth"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["email"]) &&
    isset($_POST["conf_pwd"]) &&
    isset($_POST["addr"]) &&
    isset($_POST["zipcode"])
) {
    //récupérer les données du formulaire
    $firstname = strtolower(trim($_POST["firstname"]));
    $lastname = strtolower(trim($_POST["lastname"]));
    $birth = strtolower(trim($_POST["birth"]));
    $phone = strtolower(trim($_POST["phone"]));
    $email = strtolower(trim($_POST["email"]));
    $pwd = $_POST["conf_pwd"];
    $addr = $_POST["addr"];
    $zipcode = strtolower(trim($_POST["zipcode"]));

    $status="user"; //partner //user

    User::create($firstname, $lastname,  $birth ,  $phone, $email, $pwd, $addr, $zipcode, $status);

}

class User
{
    public static function get()
    {

        include __DIR__ . "/../view/register.php";
    }

    public static function  create( string $firstname, string $lastname, string $birth , string $phone, string $email, string $pwd, string $addr, string $zipcode, string $status)
    {
        $checkPhone = UserModel::checkMyPhone($phone);
        $checkEmail = UserModel::checkMyEmail($email);
        $check = 1;
        if (!empty($checkPhone)) {
            $msg_error = "Le numéro de téléphone est déjà utilisé !";
        } elseif (!empty($checkEmail)){
            $msg_error = "L'email est déjà utilisé !";
        }
        else{
            $token = bin2hex(random_bytes(16));
            UserModel::createOne(
                [
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "birth" => $birth,
                    "phone" => $phone,
                    "email" => $email,
                    "pwd" => password_hash($pwd, PASSWORD_BCRYPT),
                    "addr" => $addr,
                    "zipcode" => $zipcode,
                    "status_user" => $status,
                    "check" => $check,
                    "token" => $token
                ]
            );
            $idUser = UserModel::getByToken($token);
            //Créations du mail
            //ra.no-reply@codelight.fr
            //mdp : Azertyuiop785.
            //smtp server : smtp.hostinger.com
            //port : 465

            $to = $email;
            $subject = "Activation de votre compte ";
            $message='Compte activé';

            $header = "Content-Type: text/plain; charset=utf-8\r\n";
            $header .= "From: ra.no-reply@codelight.fr\r\n";

            mail($to, $subject, $message, $header);



            $msg_success = "Compte crée avec succès ! \n Un mail d'activation vous a été envoyé.";

        }
        include __DIR__ . "/../view/register.php";

    }
}