<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RankingController extends Controller
{
    /**
     * @Route("/ranking", name="ranking")
     */
    public function showRanking()
    {
        return $this->render('ranking/show-ranking.html.twig', [
            'controller_name' => 'RankingController',
        ]);
    }
}
