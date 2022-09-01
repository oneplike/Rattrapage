<?php
require_once 'controllers/auth.php';
force_user_connection();
//var_dump(isConnected());
$title = "Location";
require_once('view/includes/header.php');
if ($_SESSION['admin'] != 2){
    header('Location: dashboard');
}
?>

<section class="helvetica container py-5" >
    <div class="row">
        <div class="col-lg-8 col-sm mb-5 mx-auto">
            <h1 class="fs-4 text-center lead text-dark text-uppercase">Backoffice</h1>
        </div>
    </div>
    <div class="dropdown-divider border-warning"></div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold mb-0">Gestion des Utilisateurs</h5>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary btn-sm me-3"><i class="fas fa-folder-plus"></i>Trottinettes</button>
                <a href="" class="btn btn-success btn-sm"><i class="fas fa-folder-plus"></i>Exporter</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="dropdown-divider border-warning"></div>
    <div class="row">
        <div class="table-responsive" id="leaseTable">
            <?if(empty($msg_error)):?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Numéro</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <?php endif; ?>
                <?php if(!empty($msg_error)){?><h3 class="text-dark p-5 text-center text-uppercase"><?= $msg_error?></h3><?php } ?>
                <?if(empty($msg_error)):?>
                <tbody>
                <?php foreach ($user as $user) { ?>
                    <tr>
                        <th scope="row"><?= $user["firstname"] ?></th>
                        <th scope="row"><?= $user["lastname"] ?></th>
                        <th scope="row"><?= $user["phone"] ?></th>
                        <th scope="row"><?= $user["email"] ?></th>
                        <th scope="row"><?= $user["status_user"] ?></th>
                        <td>
                            <form action="backoffice" method="POST" class="d-flex">
                                <input  class="border-0 bg-transparent d-none"name="idUser" value="<?= $user["idUser"] ?>">
                                <button  class=" text-success me-2 info infoBtn fs-4 border-0 bg-transparent m-0 p-0" style="font-size: small"  name="upgrade" value="admin"><i class="fa-solid fa-user-plus"></i></button>
                            </form>
                            <form action="backoffice" method="POST" class="d-flex">
                                <input  class="border-0 bg-transparent d-none"name="idUser" value="<?= $user["idUser"] ?>">
                                <button  class=" text-warning me-2 info infoBtn fs-4 border-0 bg-transparent m-0 p-0" style="font-size: small"  name="downgrade" value="user"><i class="fa-solid fa-user-minus"></i></button>
                            </form>
                            <form action="backoffice" method="POST" class="d-flex">
                                <input  class="border-0 bg-transparent d-none"name="idUser" value="<?= $user["idUser"] ?>">
                                <button  class=" text-danger me-2 info infoBtn fs-4 border-0 bg-transparent m-0 p-0" style="font-size: small"  name="delete" value="delete"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                            <a href="" class="text-danger me-2 info infoBtn fs-4"></a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        <?php endif; ?>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="view/src/js/backoffice_user.js"></script>

</footer>


</body>

</html>