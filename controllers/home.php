<?php

include __DIR__."/../models/user.php";

class HomeController
{
    public static function get()
    {
        include __DIR__ . "/../view/home.php";
    }

}