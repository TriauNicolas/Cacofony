<?php

namespace App\Controller;

use App\Core\BaseClasse\BaseController;
use App\Manager\UserManager;

use Firebase\JWT\JWT;

class SecurityController extends BaseController
{
    /**
     * @Route(path="/login")
     * @return void
     */
    public function getLogin()
    {
        $this->render('Security/login', [], 'Please login');
    }

    /**
     * @Route(path="/login")
     * @return void
     */
    public function postLogin(UserManager $userManager)
    {
        // // TODO - Validate credentials for real in DB and fill the payload with more infos
        // $jwt = JWT::encode(['user' => $this->HTTPRequest->getRequest('username')], $_ENV['APP_SECRET']);
        // $_SESSION['user_badge'] = $jwt;
        // $this->HTTPResponse->redirect('/');
        $response = "Mot de passe ou identifiant renseigné incorrect";

        if(isset($_POST["login"])) { 
            // var_dump("test");
            $user = $userManager->findOneBy("email", $_POST["username"]);
            if(!empty($user)){
                // session_start();
                $_SESSION["id"] = $user->getId();
                $_SESSION["isAdmin"] = $user->getIsAdmin();
                $_SESSION["login"] = $user->getEmail();
                $this->render('Frontend/home', [], 'Log in to your account');
            }else {
                $this->render('Security/login', [
                    'response' => $response,
                ], 'Log in to your account');
            }
        }else {
            $this->render('Security/login', [], 'Log in to your account');
        }
    }

    /**
     * @Route(path="/logout")
     * @return void
     */
    public function getLogout()
    {
        session_destroy();
        $this->HTTPResponse->redirect('/');
    }
}