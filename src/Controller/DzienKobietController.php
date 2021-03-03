<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DzienKobietController extends AbstractController
{
    /**
     * @Route("/dzien-kobiet", name="dzien_kobiet")
     */
    public function index()
    {
        return $this->render('dzien_kobiet/index.html.twig', [
            'controller_name' => 'DzienKobietController',
        ]);
    }
}