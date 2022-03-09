<?php

namespace App\Controller;

use App\Core\BaseClasse\BaseController;
use App\Manager\UserManager;
use App\Service\ExampleService;

class SignUpController extends BaseController
{
    /**
     * @Route(path="/signup")
     * @param UserManager $userManager
     * @param ExampleService $service
     * @return void
     */
    public function getLogin(UserManager $userManager)
    {
        $user = $_POST['username'];

        

        var_dump($user);

        $users = $userManager->insertUser();
        $this->render('Frontend/signUp', [], 'Please sign up');
    }
}