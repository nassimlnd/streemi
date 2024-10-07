<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_user_profile')]
    public function index(): Response
    {
        return $this->render('user/profile.html.twig');
    }

    #[Route('/subscribe', name: 'app_user_subscribe')]
    public function subscribe(): Response
    {
        return $this->render('user/abonnements.html.twig');
    }
}
