<?php

namespace App\Controller;

use App\Entity\CategoryEntity;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{

    /**
     * @Route("/category", name="category")
     */
    public function showFilms()
    {
        $category = new CategoryEntity();
        $category->setName('DIY search API');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();

        return $this->render('category/show-films.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    public function addCategory()
    {
        $category = new CategoryEntity();
        $category->setName('DIY search API');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();

        return $this->redirectToRoute('index');
    }

}
