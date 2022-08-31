<?php require_once 'controllers/auth.php';
if (session_start() === PHP_SESSION_NONE){
    session_start();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>


    <link href="view/src/library/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="view/src/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

</head>