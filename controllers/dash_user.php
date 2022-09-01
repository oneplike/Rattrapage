<?php


include __DIR__."/../models/user.php";
require_once "controllers/auth.php";
isConnected();
if (isset($_POST["info"])){
    $link =$_POST["info"];
    UserDash::menu($link);
}
if (isset($_POST["rides"])){
    $link =$_POST["rides"];
    UserDash::menu($link);
}
if (isset($_POST["shop"])){
    $link =$_POST["shop"];
    UserDash::menu($link);
}
if (isset($_POST["wallet"])){
    $link =$_POST["wallet"];
    UserDash::menu($link);
}
if (isset($_POST["changes"])){
    $link =$_POST["changes"];
    UserDash::menu($link);
}

if (isset($_POST["logout"])){
    $link =$_POST["logout"];
    UserDash::menu($link);
}

class UserDash
{
    public static function get()
    {

        $user = UserModel::getOneById($_SESSION['idUser']);
        if($user['status_user'] == 'admin'){
            $admin = 2;
            $_SESSION['admin'] = $admin;
        }
        else{
            $admin = 0;
        }
        $linkFocus=0;
        include __DIR__ . "/../view/dash_user.php";
    }

    public static function menu($link)
    {
        $user = UserModel::getOneById($_SESSION['idUser']);
        if($user['status_user'] == 'admin'){
            $admin = 2;
        }
        else{
            $admin = 0;
        }

        switch ($link){
            case 1:
                $linkFocus=$link;
                break;
            case 2:
                $linkFocus=$link;
                break;
            case 3:
                $linkFocus=$link;
                break;
            case 4:
                $linkFocus=$link;
                break;
            case 5:
                $linkFocus=$link;
                break;
            default:
                $linkFocus=0;
                break;
        }

        include __DIR__ . "/../view/dash_user.php";
    }

}