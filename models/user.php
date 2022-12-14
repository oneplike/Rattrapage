<?php

require_once __DIR__."/../database/settings.php";

class UserModel
{


    public static function getAll()
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->query("SELECT * FROM users");
        $users = $query->fetchAll();

        return $users;
    }

    public static function countUser(): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->query("SELECT * FROM users");

        $userrowcount = $query->rowCount();

        return $userrowcount;
    }

    public static function deleteOne($user)
    {

        $databaseConnection = DatabaseSettings::getConnection();
        $databaseConnection->prepare("DELETE FROM users WHERE idUser=?")->execute([$user]);

    }

    public static function gradeById($grade, $user)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $databaseConnection->prepare("UPDATE users SET status_user=? WHERE idUser=?")->execute([$grade, $user]);

    }

    public static function createOne($user)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("INSERT INTO users(firstname, lastname, phone, email, passwd, address, birthdate, zipcode, status_user, `check`, token) VALUES(:firstname, :lastname, :phone, :email, :pwd, :addr, :birth, :zipcode, :status_user, :check, :token)");
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

    public static function getByToken($token)
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

    public static function getOneByToken($token)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM users WHERE token = :token");

        $query->execute(
            [
                "token" => $token
            ]
        );

        $user = $query->fetch();

        return $user;
    }

    public static function getOneById($idUser)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM users WHERE idUser = :idUser");

        $query->execute(
            [
                "idUser" => $idUser
            ]
        );

        $user = $query->fetch();

        return $user;
    }

    public static function getOneByEmail($email)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("SELECT * FROM users WHERE email = :email");

        $query->execute(
            [
                "email" => $email
            ]
        );

        $user = $query->fetch();

        return $user;
    }

    public static function updateOneById($id, $user)
    {
        $set = [];
        $allowedKeys = ["firstname", "lastname", "phone", "email", "passwd", "status_user", "address", "points", "wallet", "birthdate", "zipcode", "state", "check", "token"];

        foreach ($user as $key => $value) {
            if (!in_array($key, $allowedKeys)) {
                continue;
            }

            $set[] = "$key = :$key";
        }

        $set = implode(", ", $set);
        $databaseConnection = DatabaseSettings::getConnection();
        $query = $databaseConnection->prepare("UPDATE users SET $set WHERE idUser = :idUser");
        $query->execute(array_merge(["idUser" => $id], $user));
    }

}