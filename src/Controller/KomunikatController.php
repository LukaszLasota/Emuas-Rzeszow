<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KomunikatController extends AbstractController
{
    /**
     * @Route("/komunikat", name="komunikat")
     */
    public function index()
    {
        return $this->render('komunikat/index.html.twig', [
            'controller_name' => 'KomunikatController',
        ]);
    }
}
