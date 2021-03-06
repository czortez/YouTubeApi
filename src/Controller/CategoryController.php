<?php

namespace App\Controller;

use App\Entity\CategoryEntity;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoryController extends Controller
{
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
    public function addCategory(Request $request)
    {
        $category = new CategoryEntity();
        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('categories');
        }
        return $this->render('category/new.html.twig', [
            'controller_name' => 'CategoryController',
            'form' => $form->createView(),
            ]);
    }
    public function showCategories()
    {
        $categories = $this
            ->getDoctrine()
            ->getRepository(CategoryEntity::class)
            ->findAll();

        return $this->render('category/show-categories.html.twig', [
            'categories' => $categories,
        ]);
    }
    public function filterCategory($letter)
    {
        $categories = $this
            ->getDoctrine()
            ->getRepository(CategoryEntity::class)
            ->findByFirstLetter($letter);

        return $this->render('category/show-categories.html.twig', [
            'categories' => $categories,
        ]);
    }
}
