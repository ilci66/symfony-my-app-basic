<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    // #[Route('/to/do/list', name: 'to_do_list')]
    /**
     * @Route("/to-do", name="app_todo")
     */
    public function index(): Response
    {
        return $this->render('to_do_list/index.html.twig', [
            'controller_name' => 'ToDoListController',
        ]);
    }
}
