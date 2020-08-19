<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AktyPrawneController extends AbstractController
{
    /**
     * @Route("/akty-prawne", name="akty_prawne")
     */
    public function index()
    {
        return $this->render('akty_prawne/index.html.twig', [
            'controller_name' => 'AktyPrawneController',
        ]);
    }
}
