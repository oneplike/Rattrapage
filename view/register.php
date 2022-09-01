<?php
$title = "Inscription";
include "includes/header.php" ?>
<section class="banner-login d-flex  col helvetica">
    <div class="container ">
        <h2 class="helvetica pt-5 row text-light justify-content-center text-uppercase "> Inscription</h2>
        <?php if(!empty($msg_error)){echo "<h5 class='alert alert-danger text-center' >$msg_error</h5>";  }?>
        <?php if(!empty($msg_success)){echo "<h5 class='alert alert-success text-center' >$msg_success</h5>";  }?>
        <form class="row col-12 text-capitalize mb-3" method="POST" action=""  id="register_check">
            <!--Prénom Nom Email Numéro email mdp date de naissance adresse zipcode-->
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4 text-light">
                    <label class="form-label">Prénom</label>
                    <input type="text" name="firstname" class="form-control" maxlength="30" placeholder="Jean" required>
                </div>
                <div class="col-md-4 text-light">
                    <label class="form-label">Nom</label>
                    <input type="text" name="lastname" class="form-control" maxlength="30" placeholder="Dupont" required>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-md-4 text-light">
                    <label class="form-label">Date de naissance</label>
                    <input type="date" name="birth" class="form-control" required>
                </div>
                <div class="col-md-4 text-light">
                    <label class="form-label">Numéro de Téléphone</label>
                    <input type="text" name="phone" class="form-control" maxlength="14" placeholder="06 16 27 98 17" required>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-md-4 text-light">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="exemple@easyscooters.fr" required>
                </div>
                <div class="col-md-2 mb-2 text-light">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="pwd" class="form-control" maxlength="30" required>
                    <div class="invalid-feedback form-control" >
                        <p>Le mot de passe doit contenir:</p>
                        <ul>
                            <li> Au moins 3 caractères</li>
                            <li> Une majuscule</li>
                            <li> Une minuscule</li>
                            <li> Au moins un chiffre</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 mb-2 text-light">
                    <label class="form-label">Confirmation</label>
                    <input type="password" name="conf_pwd" class="form-control" maxlength="30" required>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-md-6 text-light">
                    <label class="form-label">Adresse</label>
                    <input type="text" name="addr" class="form-control" maxlength="100" placeholder="40 avenue Hoche" required>
                </div>
                <div class="col-md-2 mb-2 text-light">
                    <label class="form-label">Zipcode</label>
                    <input type="text" name="zipcode" class="form-control" maxlength="6" placeholder="75 016" required>
                </div>
            </div>
            <span class="text-light mb-2 text-center">Déjà inscrit ? <a class="link-color" href="login">Se connecter</a></span>
            <span class="text-light mb-2 text-center">Vous voulez être partenaire ? <a class="link-success" href="register_partner">Inscrivez-vous ici</a></span>
            <div class="col-12 text-center">
                <button class="btn btn-info text-light" type="submit">Creer mon compte</button>
            </div>
        </form>
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