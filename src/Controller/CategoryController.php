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
        $category = $this
            ->getDoctrine()
            ->getRepository(CategoryEntity::class)
            ->find(1);
        \dump($category);
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
    public function showCategories()
    {
        $categories = $this
            ->getDoctrine()
            ->getRepository(CategoryEntity::class)
            ->findAll();

            return $this->render('category/show-categories.html.twig',[
                'categories' => $categories,
        ]);

    }

}
