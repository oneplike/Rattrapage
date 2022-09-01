<?php
$title = "Accueil";
include "includes/header.php";
?>

    <section class="banner d-flex justify-content-center align-items-center pt-2">
        <div class="container my-5  py-5">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5">
                    <h1 class="text-capitalize py-3 helvetica banner-description">
                        trottinettes 100% électriques <br/> en libre-service
                    </h1>
                    <p>
                        <a class="btn btn-order text-uppercase" href="lease">Louer maintenant</a>
                        <a class="btn btn-outline-info cc-btn-info text-uppercase" href="#">Boutique</a>
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="services helvetica py-5">
        <div class="container">
            <div class="row">
                <div class="card border-0">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="view/src/img/home/ecologie.png" class="img-thumbnail border-0" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Ecologique</h5>
                                <p class="card-text">
                                    L’on aurait pu s’attendre à ce que les moteurs dont elles sont équipées soient bruyants et produisent des gaz à effet de serres, mais fort heureusement, ce n’est pas le cas.
                                    En utilisant une trottinette électrique pour vos déplacements vous contribuez à votre façon à la préservation de l’équilibre naturel et à la lutte contre le réchauffement climatique.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-5 border-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Rapide</h5>
                                <p class="card-text">Vous pourrez ainsi éviter les bouchons fréquents des grandes villes et lieux de concentration. Certes, les distances doivent être relativement courtes afin de ne pas trop vous fatiguer, mais au moins, vous vous déplacerez sans encombre.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="view/src/img/home/rapide.png" class="img-thumbnail border-0" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-0">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="view/src/img/home/economie.png" class="img-thumbnail border-0" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Economique</h5>
                                <p class="card-text">Les coûts d’acquisition et de maintenance ainsi que la consommation d’une trottinette électronique sont très inférieurs à ceux d’une voiture ou même d’un vélo à assistance électrique. Ce sont des engins qui ne consomment que très peu en carburant.
                                    <br />Nos prix sont abordables pour tout le monde !</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="ccm"></div>
    <section class="cc-step mt-5 py-5 helvetica" >

        <div class="container">
            <div class="row">
                <h1 class="text-uppercase text-center text-light mb-5"> Se déplacer efficacement !</h1>
                <div class="card border-0 bg-transparent align-items-center text-center">
                    <div class="row">
                        <div class="col-md-2 pt-3">
                            <lottie-player src="view/src/lottie/step1.json"  background="transparent"  speed="1"  style="width: 100px; height: 150px;" autoplay ></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-light">
                                <p class="card-text">Cherchez sur la carte de l’appli une trottinette électrique se trouvant à proximité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 pt-3">
                            <lottie-player src="view/src/lottie/step2.json"  background="transparent"  speed="1"  style="width: 100px; height: 150px;" autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-light">
                                <p class="card-text">Le code QR pour déverrouiller votre trottinette électrique et démarrer votre trajet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 pt-3">
                            <lottie-player src="view/src/lottie/step3.json"  background="transparent"  speed="1"  style="width: 100px; height: 150px;" autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-light text-center">
                                <p class="card-text">Poussez la trottinette électrique vers l’avant pour replier la béquille, et vous voilà prêt pour le grand départ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 pt-3">
                            <lottie-player src="view/src/lottie/step4.json"  background="transparent"  speed="1"  style="width: 100px; height: 150px;" autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-light">
                                <p class="card-text">Une fois votre trajet achevé, garez votre trottinette sur une place de stationnement réservée à cet effet ou trouvez un endroit sûr sur le trottoir à distance des piétons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 pt-3">
                            <lottie-player src="view/src/lottie/step5.json"  background="transparent"  speed="1"  style="width: 100px; height: 150px;" autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-light justify-content-center">
                                <p class="card-text">Votre trottinette électrique sur sa béquille, dans l’appli sélectionnez « Achever le trajet », et voilà, c'est fini !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form py-5" id="contact">
        <div class="container">
            <h2 class="helvetica text-uppercase text-center text-light mb-4">Une Question ? Contactez nous !</h2>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Votre nom" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" placeholder="Email" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                            <input type="number" class="form-control" placeholder="Numéro de Téléphone">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Sujet</i></span>
                        <input type="text" class="form-control" placeholder="Ex: Problème de compte ">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Message</span>
                        <textarea class="form-control" aria-label="Bonjour mon compte est inaccessible !"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-info cc-btn-info helvetica">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <div class="container text-center">
        <div class="row">
            <p>Designer et construit par Reda</p>
        </div>
    </div>
<?php
include "includes/footer.php" ?>