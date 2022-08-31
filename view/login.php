<?php
$title = "Connexion";
include "includes/header.php" ?>
<body class="body-login">
    <section class="banner-login d-flex justify-content-center align-items-center">
        <div class="container align-content-center align-items-center justify-content-center">
            <h2 class=" row text-center text-light "> Connexion</h2>
            <?php if(!empty($msg_error)){echo "<h5 class='alert alert-danger text-center' >$msg_error</h5>";  }?>
            <?php if(!empty($msg_success)){echo "<h5 class='alert alert-success text-center' >$msg_success</h5>";  }?>
            <form class="row " action="" method="POST" id="login_check" >

                <div class="row mt-5">
                    <div class="col-md-4 text-light">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"  placeholder="exemple@easyscooters.fr" required>
                    </div>
                    <div class="col-md-4 mb-2 text-light">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="pwd" class="form-control"  required>
                    </div>
                    <span class="text-light mb-2">Pas encore inscrit ? <a class="link-color" href="register">S'inscrire</a></span>
                    <div class="col-12">
                        <button class="btn btn-info text-light" type="submit">Se connecter</button>
                    </div>
            </form>
        </div>

    </section>

    <footer class="py-3">
        <script src="view/src/js/check.js"></script>
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