<?php

include __DIR__."/../models/scooter.php";
require_once "controllers/auth.php";


//Recupère les donnée des scooter qui nous interesse
isConnected();
//force lease pour acceder a la page

class ride
{
    public static function get()
    {


        include __DIR__ . "/../view/ride.php";
    }

}