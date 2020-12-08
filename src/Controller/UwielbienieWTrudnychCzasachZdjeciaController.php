<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UwielbienieWTrudnychCzasachZdjeciaController extends AbstractController
{
    /**
     * @Route("/uwielbienie-w-trudnych-czasach-zdjecia", name="uwielbienie_w_trudnych_czasach_zdjecia")
     */
    public function index()
    {
        return $this->render('uwielbienie_w_trudnych_czasach_zdjecia/index.html.twig', [
            'controller_name' => 'UwielbienieWTrudnychCzasachZdjeciaController',
            'foto' => [
                [
                    'img' => 'img/uwielbienie-galeria/1.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/1s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/2.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/2s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/3.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/3s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/4.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/4s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/5.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/5s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/6.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/6s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/7.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/7s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/8.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/8s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/9.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/9s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/10.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/10s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/11.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/11s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/12.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/12s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/13.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/13s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/14.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/14s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/15.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/15s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/16.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/16s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/17.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/17s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/18.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/18s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/19.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/19s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/20.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/20s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/21.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/21s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/22.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/22s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/23.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/23s.jpg',
                ],

                [
                    'img' => 'img/uwielbienie-galeria/24.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/24s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/25.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/25s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/26.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/26s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/27.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/27s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/28.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/28s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/29.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/29s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/30.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/30s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/31.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/31s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/32.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/32s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/33.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/33s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/34.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/34s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/35.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/35s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/36.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/36s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/37.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/37s.jpg',
                ],
                [
                    'img' => 'img/uwielbienie-galeria/38.jpg',
                    'imgSmall' => 'img/uwielbienie-galeria/38s.jpg'],
            ],
        ]);
    }
}