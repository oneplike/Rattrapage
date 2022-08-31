<?php

/**
 * Permet d'afficher constamment toutes les erreurs (même les masquées)
 *
 * @see https://www.php.net/manual/en/function.ini-set.php
 */

ini_set("display_errors", 1);

/**
 * Permet d'afficher tous les types d'erreurs (warnings, info, erreurs, ...)
 *
 * @see https://www.php.net/manual/en/function.error-reporting.php
 */
error_reporting(E_ALL);

http_response_code(200);

/**
 * La route que l'utilisateur essaie de récupérer
 *
 * @see https://www.php.net/manual/en/reserved.variables.request.php
 */
$route = isset($_REQUEST["route"]) ? $_REQUEST["route"] : "";

/**
 * La méthode HTTP
 *
 * @see https://www.php.net/manual/en/reserved.variables.server.php
 */
$method = $_SERVER["REQUEST_METHOD"];

if ($route === "") {
    include "./controllers/home.php";

    if ($method === "GET") {
        HomeController::get();
        return;
    }

}

if ($route === "home") {
    include "./controllers/home.php";

    if ($method === "GET") {
        HomeController::get();
        return;
    }

}
if ($route === "login") {
    include "./controllers/login.php";

    if ($method === "GET") {
        LoginController::get();
        return;
    }

}
if ($route === "register") {
    include "./controllers/user.php";

    if ($method === "GET") {
        User::get();
        return;
    }

}

if ($route === "dashboard") {
    include "./controllers/dash_user.php";

    if ($method === "GET") {
        UserDash::get();
        return;
    }

}

if ($route === "logout") {
    include "./controllers/login.php";

    if ($method === "GET") {
        LoginController::logout();
        return;
    }
}

