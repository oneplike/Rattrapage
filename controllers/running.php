<?php

include __DIR__."/../models/scooter.php";
require_once "controllers/auth.php";


//Recupère les donnée des scooter qui nous interesse
isConnected();

if(isset($_POST['lease']) && isset($_POST['idScooter'])){
    $_SESSION['lease'] = $_POST['lease'];
    $_SESSION['idScooter'] = $_POST['idScooter'];
}


class running
{
    public static function get()
    {
        $leasing = $_SESSION['lease'];
        $idScooter = $_SESSION['idScooter'];
        if ($leasing == 1) {
            echo "location en cours";
            ScooterModel::leasingChangeState(
                [
                    "idUser" => $_SESSION['idUser'],
                    "idScooter" => $idScooter,
                    "running" => $leasing
                ]
            );
        }
        if ($leasing == 0) {
            echo "Arret de la loc";
            ScooterModel::leasingChangeState(
                [
                    "idUser" => $_SESSION['idUser'],
                    "idScooter" => $idScooter,
                    "running" => $leasing
                ]
            );
        }
        header('Location: home');
    }
}



