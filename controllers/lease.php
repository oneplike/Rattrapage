<?php

include __DIR__."/../models/scooter.php";
require_once "controllers/auth.php";


//Recupère les donnée des scooter qui nous interesse
isConnected();
if(isset($_POST['action']) && $_POST['action']== 'fetch'){
    lease::get();

}




class lease
{
    public static function get()
    {


        $msg_error;
        if (ScooterModel::countScooter(1) > 0){
            $scooters = ScooterModel::getScooter(1);
        }else{
            $msg_error= "Aucune Trottinettes Disponible ! ";
        }
        include __DIR__ . "/../view/lease.php";
    }

}