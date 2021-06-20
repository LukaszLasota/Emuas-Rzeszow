<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PiknikRodzinnyController extends AbstractController
{
    /**
     * @Route("/piknik-rodzinny", name="piknik-rodzinny")
     */
    public function index()
    {
        return $this->render('piknik_rodzinny/index.html.twig', [
            'controller_name' => 'PiknikRodzinnyController',
        ]);
    }
}