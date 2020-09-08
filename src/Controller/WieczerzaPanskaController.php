<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WieczerzaPanskaController extends AbstractController
{
    /**
     * @Route("/wieczerza-panska", name="wieczerza_panska")
     */
    public function index()
    {
        return $this->render('wieczerza_panska/index.html.twig', [
            'controller_name' => 'WieczerzaPanskaController',
        ]);
    }
}
