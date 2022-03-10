<?php

namespace App\Controller;

use App\Core\BaseClasse\BaseController;
use App\Manager\UserManager;
use App\Service\ExampleService;

class SignUpController extends BaseController
{
    /**
     * @Route(path="/signup")
     * @return void
     */
    public function getSignUp()
    {
        $this->render('Frontend/signUp', [], 'Please sign up');
    }

    /**
     * @Route(path="/signup")
     * @param UserManager $userManager
     * @param ExampleService $service
     * @return void
     */
    public function postSignUp(UserManager $userManager)
    {
        // $user = $_POST['username'];

        if(isset($_POST["signup"])) { 
            var_dump("test");
            $users = $userManager->insertUser($_POST['username'], $_POST['password']);
            $this->render('Frontend/home', [], 'Log in to your account');
        }else {
            $this->render('Security/login', [], 'Log in to your account');
        }
        $this->render('Frontend/signUp', [], 'Log in to your account');
    }
}