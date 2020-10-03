<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TransmisjaController extends AbstractController
{
    /**
     * @Route("/transmisja", name="transmisja")
     */
    public function index()
    {
        return $this->render('transmisja/index.html.twig', [
            'controller_name' => 'TransmisjaController',
        ]);
    }
}
