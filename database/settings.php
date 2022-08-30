<?php

class DatabaseSettings
{
    static $driver = "mysql";
    static $name = "u635527704_EAS";
    static $host = "212.107.17.103";
    static $user = "u635527704_reda";
    static $password = "Azertyuiop785";

    static $pdoSettings = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public static function getConnection()
    {
        $driver = DatabaseSettings::$driver;
        $databaseName = DatabaseSettings::$name;
        $host = DatabaseSettings::$host;
        $user = DatabaseSettings::$user;
        $password = DatabaseSettings::$password;
        return new PDO("$driver:dbname=$databaseName;host=$host", $user, $password, DatabaseSettings::$pdoSettings);
    }
}
//jdbc:mariadb://212.107.17.103:3306/u635527704_EAS
