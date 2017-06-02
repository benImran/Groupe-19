<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 17/05/2017
 * Time: 18:13
 */
class CheckAuth
{
    /**
     * CheckAuth constructor.
     */
    public function __construct()
    {
        session_start();
        return $this;
    }

    public function check()
    {
        if (!isset($_SESSION["pseudo"]))
        {
            header("Location: Connexion.php");
            die();
        }
    }

    /*public function deconnexion()
    {
        if (!isset($_SESSION['pseudo']))
        {
            header('Location: Connexion.php');
            die();

        }
        session_unset();

        //sert à detruire les cookies dans la session
        if (ini_get("session.use_cookies"))
        {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();


    }*/
}