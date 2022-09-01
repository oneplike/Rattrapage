<?php

require_once __DIR__."/../database/settings.php";

class ScooterModel
{
    public static function getScooter($status)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM scooters WHERE `status` = :status");
        $query->execute(
            [
                "status" => $status
            ]
        );

        $scooter = $query->fetchAll();

        return $scooter;
    }

    public static function countScooter($status): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM scooters WHERE `status` = :status");
        $query->execute(
            [
                "status" => $status
            ]
        );

        $scooterrowcount = $query->rowCount();

        return $scooterrowcount;
    }

    public static function leasingChangeState($lease)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("INSERT INTO lease(fkUser, fkScooter, running) VALUES(:idUser, :idScooter, :running)");
        $query->execute($lease);
    }
}