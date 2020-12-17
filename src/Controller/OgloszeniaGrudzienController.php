<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OgloszeniaGrudzienController extends AbstractController
{
    /**
     * @Route("/ogloszenia-grudzien", name="ogloszenia_grudzien")
     */
    public function index()
    {
        return $this->render('ogloszenia_grudzien/index.html.twig', [
            'controller_name' => 'OgloszeniaGrudzienController',
        ]);
    }
}