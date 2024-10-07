<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/movie/{category}', name: 'app_movie_category')]
    public function index(): Response
    {
        return $this->render('movie/category.html.twig');
    }


    #[Route('/movies', name: 'app_movie_list')]
    public function list(): Response
    {
        return $this->render('movie/list.html.twig');
    }

    #[Route('/movies/{id}', name: 'app_movie_show')]
    public function show($id): Response
    {
        return $this->render('movie/detail.html.twig');
    }

    #[Route('/discover', name: 'app_movie_discover')]
    public function discover(): Response
    {
        return $this->render('movie/discover.html.twig');
    }

    #[Route('/lists', name: 'app_movie_lists')]
    public function lists(): Response
    {
        return $this->render('movie/lists.html.twig');
    }

}
