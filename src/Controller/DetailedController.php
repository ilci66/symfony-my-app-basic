<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailedController extends AbstractController
{
    // #[Route('/detailed/{slug}', name: 'detailed')]
    /**
     * @Route("/detailed/{slug}", name="detailed_item")
     */
    public function index($slug): Response
    {

        
        return $this->render('detailed/index.html.twig', [
            'controller_name' => 'DetailedController',
            'slug' => $slug
        ]);
    }
}
