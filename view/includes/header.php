<?php require_once 'controllers/auth.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>


    <link href="view/src/library/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
    <link href="view/src/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>
<body>
<header class="header">
    <nav class="cc-navbar navbar navbar-expand-lg <?php if($title == "Accueil"){echo "position-fixed"; }  ?> navbar-dark w-100">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase mx-5 py-2 fw-bolder href="#"> <img src="view/src/img/logo/LogoImage.png" width="50px"> Easyscooters</a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-4">
                        <a class="nav-link text-uppercase active " aria-current="page" href="home">Accueil</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link text-uppercase" href="home#ccm">Comment ça marche ?</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link text-uppercase" href="home">E-shop</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link text-uppercase" href="home#contact">Contact</a>
                    </li>
                    <?php if (isConnected()): ?>
                    <li class="nav-item pe-2">
                        <a class="btn btn-order text-uppercase" href="dashboard">Profil</a>
                    </li>
                    <?php else: ?>

                    <li class="nav-item pe-2">
                        <a class="btn btn-order text-uppercase" href="login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-info cc-btn-info text-uppercase" href="register">Inscription</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>