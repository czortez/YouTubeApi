<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function showUserDetails()
    {
        return $this->render('user/show-user-details.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    public function login()
    {
        return $this->render('user/login.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
