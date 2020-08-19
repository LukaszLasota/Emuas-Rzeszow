<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PorownanieWyznanController extends AbstractController
{
    /**
     * @Route("/porownanie-wyznan", name="porownanie_wyznan")
     */
    public function index()
    {
        return $this->render('porownanie_wyznan/index.html.twig', [
            'controller_name' => 'PorownanieWyznanController',
        ]);
    }
}
