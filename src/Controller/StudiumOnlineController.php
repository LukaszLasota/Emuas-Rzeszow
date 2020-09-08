<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StudiumOnlineController extends AbstractController
{
    /**
     * @Route("/studium-online", name="studium_online")
     */
    public function index()
    {
        return $this->render('studium_online/index.html.twig', [
            'controller_name' => 'StudiumOnlineController',
        ]);
    }
}
