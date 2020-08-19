<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WyznanieWiaryController extends AbstractController
{
    /**
     * @Route("/wyznanie-wiary", name="wyznanie_wiary")
     */
    public function index()
    {
        return $this->render('wyznanie_wiary/index.html.twig', [
            'controller_name' => 'WyznanieWiaryController',
        ]);
    }
}
