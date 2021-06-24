<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SansrendezvousController extends AbstractController
{
    /**
     * @Route("/sansrendezvous", name="sansrendezvous")
     */
    public function index(): Response
    {
        return $this->render('sansrendezvous/index.html.twig', [
            'controller_name' => 'SansrendezvousController',
        ]);
    }
}
