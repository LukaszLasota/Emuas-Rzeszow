<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\News;

class NewsController extends AbstractController
{
    /**
     * @Route("/aktualnosci", name="news")
     */
    public function index(News $news)
    {
        return $this->render('news/index.html.twig', [
            'controller_name' => 'news',
            'news' => $news->getPosts()           
            ]);
    }
}
