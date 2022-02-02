<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemsController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(): Response
    {
        $items = array(
            array('name'=>'item 1', 'id' => "1"),
            array('name'=>'item 2', 'id' => "2"),
            array('name'=>'item 3', 'id' => "3"),
        );
        return $this->render('items/index.html.twig', [
            'controller_name' => 'ItemsController',
            'items' => $items
        ]);
    }
}
