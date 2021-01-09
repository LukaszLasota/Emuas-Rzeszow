<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeminariumBiblijneController extends AbstractController
{
    /**
     * @Route("/seminarium-biblijne", name="seminarium_biblijne")
     */
    public function index()
    {
        return $this->render('seminarium_biblijne/index.html.twig', [
            'controller_name' => 'SeminariumBiblijneController',
        ]);
    }
}