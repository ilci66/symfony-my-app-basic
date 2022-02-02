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
        // gotta mimick a database call here with the id 
        // $detailedItem = "";
        function findTheItemInfo($slug){
            $detailedItem = array('id'=>$slug, 'name'=>$slug, 'info'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet mi neque, a volutpat dui dapibus ac. Etiam elementum nec elit sit amet iaculis.');
            return $detailedItem;
        }
        
        return $this->render('detailed/index.html.twig', [
            'controller_name' => 'DetailedController',
            'slug' => $slug,
            'detailed' => findTheItemInfo($slug)
        ]);
    }
}
