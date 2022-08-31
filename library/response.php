<?php

class Response
{
    public static function data($statusCode, $headers, $body)
    {
        http_response_code($statusCode);


        foreach ($headers as $key => $value) {
            header("$key: $value");
        }

        json_encode($body);
    }
}
