<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilmController extends Controller
{
    /**
     * @Route("/film", name="film")
     */
    public function showFilm()
    {
        return $this->render('film/show-film.html.twig', [
            'controller_name' => 'FilmController',
        ]);
    }
}
