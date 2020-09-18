<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UwielbienieWTrudnychCzasachController extends AbstractController
{
    /**
     * @Route("/uwielbienie-w-trudnych-czasach", name="uwielbienie_w_trudnych_czasach")
     */
    public function index()
    {
        return $this->render('uwielbienie_w_trudnych_czasach/index.html.twig', [
            'controller_name' => 'UwielbienieWTrudnychCzasachController',
        ]);
    }
}
