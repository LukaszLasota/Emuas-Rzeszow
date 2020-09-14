<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SplywKajakowyController extends AbstractController
{
    /**
     * @Route("/splyw-kajakowy", name="splyw_kajakowy")
     */
    public function index()
    {
        return $this->render('splyw_kajakowy/index.html.twig', [
            'controller_name' => 'SplywKajakowyController',
        ]);
    }
}
