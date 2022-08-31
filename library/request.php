<?php

class Request
{

    public static function data()
    {
        $rawBody = file_get_contents("php://input");
        $data = json_decode($rawBody);

        return $data;
    }

    public static function headers()
    {
        return getallheaders();
    }
}
