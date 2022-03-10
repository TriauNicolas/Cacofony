<?php

namespace App\Controller;

use App\Core\BaseClasse\BaseController;
use App\Manager\UserManager;
use App\Service\ExampleService;

class UserController extends BaseController
{
//     /**
//      * @Route(path="/", name="homePage")
//      * @param UserManager $userManager
//      * @param ExampleService $service
//      * @return void
//      */
//     public function getUserList(UserManager $UserManager, ExampleService $service)
//     {
//         $users = $userManager->findAll();
//         $this->render('Frontend/home', [
//             'users' => $users
//         ], 'Le titre de la page');
//     }

//     /**
//      * @Route(path="/show/{id}-{truc}", name="showOne")
//      * @param int $id
//      * @param string $truc
//      * @param PostManager $postManager
//      * @return void
//      */
//     public function getShow(int $id, string $truc, PostManager $postManager)
//     {
//         $post = $postManager->findOneBy('id', $id);
//         if (!$post) {
//             $this->HTTPResponse->redirect('/');
//         }
//         $this->render('Frontend/showOne', ['post' => $post], $truc);
//     }
}