<?php


include __DIR__."/../models/user.php";
include __DIR__."/../models/scooter.php";
require_once "controllers/auth.php";
isConnected();

if(isset($_POST['delete']) && isset($_POST['idUser'])){
    $delete= $_POST['delete'];
    $idUser= $_POST['idUser'];
    Back::delete($idUser);
    header('Location: backoffice');
}

if(isset($_POST['upgrade']) && isset($_POST['idUser'])){
    $upgrade= $_POST['upgrade'];
    $idUser= $_POST['idUser'];
    Back::grade($upgrade,$idUser);
    header('Location: backoffice');
}

if(isset($_POST['downgrade']) && isset($_POST['idUser'])){
    $downgrade= $_POST['downgrade'];
    $idUser= $_POST['idUser'];
    Back::grade($downgrade,$idUser);
    header('Location: backoffice');
}


class Back
{
    public static function get()
    {

        if (UserModel::countUser(1) > 0){
            $user = UserModel::getAll();
        }else{
            $msg_error= "Aucun Utilisateur Disponible ! ";
        }
        include __DIR__ . "/../view/backoffice.php";
    }


    public static function delete($user)
    {
        UserModel::deleteOne($user);
    }

    public static function grade($grade, $user)
    {
        UserModel::gradeById($grade, $user);
    }




}