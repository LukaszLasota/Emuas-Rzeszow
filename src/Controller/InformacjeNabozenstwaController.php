<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformacjeNabozenstwaController extends AbstractController
{
    /**
     * @Route("/informacje-nabozenstwa", name="informacje_nabozenstwa")
     */
    public function index()
    {
        return $this->render('informacje_nabozenstwa/index.html.twig', [
            'controller_name' => 'InformacjeNabozenstwaController',
        ]);
    }
}
