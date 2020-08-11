<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\News;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(News $news)
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'Kościół Zielonoświątkowy Zbór Emaus w Rzeszowie',
            'news' => $news->getPosts(),
            'menu' => [
                [
                'href' => '#one',
                'name' => 'Aktualności',
                ],
                [
                'href' => '#two',
                'name' => 'kim jesteśmy',
                ],
                [
                'href' => '#three',
                'name' => 'nasze spotkania',
                ],
                [
                'href' => '#four',
                'name' => 'kontakt',
                ]
                ],
        ]);
    }
}
