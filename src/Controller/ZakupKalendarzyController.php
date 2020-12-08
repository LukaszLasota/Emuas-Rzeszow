<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ZakupKalendarzyController extends AbstractController
{
    /**
     * @Route("/zakup-kalendarzy", name="zakup_kalendarzy")
     */
    public function index()
    {
        return $this->render('zakup_kalendarzy/index.html.twig', [
            'controller_name' => 'ZakupKalendarzyController',
            'foto' => [
                [
                    'img' => '/img/news/14.jpg',
                    'imgSmall' => '/img/news/14.jpg',
                ],
                [
                    'img' => '/img/news/15.jpg',
                    'imgSmall' => '/img/news/15.jpg',
                ],
                [
                    'img' => '/img/news/16.jpg',
                    'imgSmall' => '/img/news/16.jpg',
                ],
            ],
        ]);
    }
}