<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KawaZPastoremController extends AbstractController
{
    /**
     * @Route("/kawa-z-pastorem", name="kawa_z_pastorem")
     */
    public function index()
    {
        return $this->render('kawa_z_pastorem/index.html.twig', [
            'controller_name' => 'KawaZPastoremController',
        ]);
    }
}
