<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PomocDlaUkrainyController extends AbstractController
{
    /**
     * @Route("/pomoc-dla-ukrainy", name="pomoc-dla-ukrainy")
     */
    public function index()
    {
        return $this->render('pomoc_dla_ukrainy/index.html.twig', [
            'controller_name' => 'PomocDlaUkrainyController',
        ]);
    }
}