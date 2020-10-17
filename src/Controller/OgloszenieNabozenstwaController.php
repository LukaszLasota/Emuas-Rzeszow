<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OgloszenieNabozenstwaController extends AbstractController
{
    /**
     * @Route("/ogloszenie-nabozenstwa", name="ogloszenie_nabozenstwa")
     */
    public function index()
    {
        return $this->render('ogloszenie_nabozenstwa/index.html.twig', [
            'controller_name' => 'OgloszenieNabozenstwaController',
        ]);
    }
}
