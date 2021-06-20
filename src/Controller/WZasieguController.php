<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WZasieguController extends AbstractController
{
    /**
     * @Route("/w-zasiegu", name="w-zasiegu")
     */
    public function index()
    {
        return $this->render('w_zasiegu/index.html.twig', [
            'controller_name' => 'WZasieguController',
        ]);
    }
}