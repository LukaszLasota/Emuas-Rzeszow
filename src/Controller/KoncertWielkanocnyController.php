<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KoncertWielkanocnyController extends AbstractController
{
    /**
     * @Route("/koncert-wielkanocny", name="koncert_wielkanocny")
     */
    public function index()
    {
        return $this->render('koncert_wielkanocny/index.html.twig', [
            'controller_name' => 'KoncertWielkanocnyController',
        ]);
    }
}