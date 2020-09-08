<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmausDlaDzieciController extends AbstractController
{
    /**
     * @Route("/emaus-dla-dzieci", name="emaus_dla_dzieci")
     */
    public function index()
    {
        return $this->render('emaus_dla_dzieci/index.html.twig', [
            'controller_name' => 'EmausDlaDzieciController',
        ]);
    }
}
