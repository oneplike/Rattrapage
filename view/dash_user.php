<?php
require_once 'controllers/auth.php';
force_user_connection();
//var_dump(isConnected());
$title = "Mon Profil";
require_once('view/includes/header.php');
?>

<section class="helvetica mb-3 py-5" style="background-color: #c2c2c2">
    <h2 class="text-center">Bienvenue sur votre profil <span class="fs-1 text-capitalize"><?= $user['firstname'] ?></span></h2>
    <div class="row  mx-5 my-5  ">
        <div class="col-md-2 text-center me-1">
            <ul class="list-group align-content-start align-items-start justify-content-start start">
                <li class="list-group-item bg-transparent border-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light" style="font-size: small"  name="info" value="0">Infos</button>
                    </form>
                </li>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light " style="font-size: small"  name="rides" value="1">Courses</button>
                    </form>
                </li>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light " style="font-size: small"  name="shop" value="2">Achats</button>
                    </form>
                </li>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light " style="font-size: small"  name="wallet" value="3">Portefeuille</button>
                    </form>
                </li>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light " style="font-size: small"  name="changes" value="4">Modifier</button>
                    </form>
                </li>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <form action="" method="POST">
                        <button  class="btn btn-info text-light " style="font-size: small"  name="logout" value="5">Se déconnecter</button>
                    </form>
                </li>
                <?php if ($admin== 2): ?>
                <li class="list-group-item bg-transparent border-0 py-0 my-0" >
                    <a href="backoffice" class="btn btn-info text-light">Back-Office</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
        <div class="col-md-9">
            <?php if ($linkFocus== 0): ?>
            <div class="card border-0 rounded-1">
                <div class="card-body">
                    <h4 class="card-title">Vos informations</h4>
                    <div class="row justify-content-start px-3 py-2">
                        <div class="col-md-4">
                            <p class="card-text"><?= $user['firstname'] ?> <?= $user['lastname'] ?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="card-text"><?= $user['phone'] ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-start px-3 py-2">
                        <p class="card-text"><?= $user['email'] ?></p>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="row justify-content-center">
                                <p class="card-text">Kilomètres</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="card-text">110000</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-center">
                                <p class="card-text">Courses</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="card-text">10</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-center">
                                <p class="card-text">Points</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="card-text">300</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <?php endif;?>
            <?php if ($linkFocus == 1): ?>
                <div class="card border-0 rounded-1">
                    <div class="card-body text-center">
                        <h1>Mes courses</h1>
                    </div>
                </div>
            <?php endif;?>
            <?php if ($linkFocus == 2): ?>
                <div class="card border-0 rounded-1">
                    <div class="card-body text-center">
                        <h1>Mes achats</h1>
                    </div>
                </div>
            <?php endif;?>
            <?php if ($linkFocus == 3): ?>
                <div class="card border-0 rounded-1">
                    <div class="card-body text-center">
                       <h1>Mon portefeuille</h1>
                    </div>
                </div>
            <?php endif;?>
            <?php if ($linkFocus == 4): ?>
                <div class="card border-0 rounded-1">
                    <div class="card-body text-center">
                        <h1>Modification</h1>
                    </div>
                </div>
            <?php endif;?>
            <?php if ($linkFocus == 5): ?>
            <div class="card border-0 rounded-1">
                <div class="card-body text-center">
                    <a class="btn btn-danger text-uppercase" href="logout">Déconexion</a>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>


        <footer class="py-3">
            <script src="view/src/js/checkRegister.js"></script>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="view/src/library/jquery/jquery-3.3.1.slim.min.js"></script>
            <script src="view/src/library/bootstrap/js/bootstrap.bundle.js"></script>
            <script src="view/src/library/bootstrap/js/bootstrap.bundle.min.js"></script>
        </footer>


    </body>

</html>


