<?php
require_once 'controllers/auth.php';
force_user_connection();
//var_dump(isConnected());
$title = "Location";
require_once('view/includes/header.php');
?>

<section class="helvetica container py-5" >
    <div class="row">
        <div class="col-lg-8 col-sm mb-5 mx-auto">
            <h1 class="fs-4 text-center lead text-dark text-uppercase">Votre course en cours</h1>
        </div>
    </div>
    <div class="dropdown-divider border-warning"></div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold mb-0 ">Votre course en cours</h5>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">

            </div>
        </div>
    </div>
    <hr>
    <div class="dropdown-divider border-warning"></div>
    <div class="row">
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="view/src/js/lease.js"></script>

</footer>


</body>

</html>


