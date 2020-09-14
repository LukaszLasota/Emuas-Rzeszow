<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UwielbienieWZasieguBogaController extends AbstractController
{
    /**
     * @Route("/uwielbienie-w-zasiegu-boga", name="uwielbienie_w_zasiegu_boga")
     */
    public function index()
    {
        return $this->render('uwielbienie_w_zasiegu_boga/index.html.twig', [
            'controller_name' => 'UwielbienieWZasieguBogaController',
        ]);
    }
}
