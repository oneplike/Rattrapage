<?php

include "library/request.php";
include "library/response.php";
include __DIR__."/../models/user.php";

class UserDash
{
    public static function get()
    {

        include __DIR__ . "/../view/dash_user.php";
    }

}