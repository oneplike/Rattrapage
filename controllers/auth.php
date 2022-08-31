<?php

function isConnected(): bool {
    if (session_start() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connect']);
}

function force_user_connection(): void
{
    if(!isConnected()){
        header('Location: login');
        exit();
    }
}