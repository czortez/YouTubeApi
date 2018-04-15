<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="category")
     */
    public function showFilms()
    {
        return $this->render('category/show-films.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
