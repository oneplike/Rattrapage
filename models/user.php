<?php

include __DIR__."/../database/settings.php";

class UserModel
{
    public static function createOne($user)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("INSERT INTO users(firstname, lastname, phone, email, passwd, address, birthdate, zipcode, status_user, token) VALUES(:firstname, :lastname, :phone, :email, :pwd, :addr, :birth, :zipcode, :status_user, :token)");
        $query->execute($user);
    }

    public static function checkMyPhone(string $phone)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE phone = :phone");
        $getUserQuery->execute([
            "phone" => $phone
        ]);
        return $getUserQuery->fetch();
    }

    public static function checkMyEmail(string $email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUserQuery = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");
        $getUserQuery->execute([
            "email" => $email
        ]);
        return $getUserQuery->fetch();
    }

    public static function getOneByToken($token)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM users WHERE token = :token");
        $query->execute(
            [
                "token" => $token
            ]
        );

        $response = $query->fetch(PDO::FETCH_ASSOC);
        return $response['idUser'];
    }

}