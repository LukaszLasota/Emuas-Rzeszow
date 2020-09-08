<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrzyplywWiaryController extends AbstractController
{
    /**
     * @Route("/przyplyw-wiary", name="przyplyw_wiary")
     */
    public function index()
    {
        return $this->render('przyplyw_wiary/index.html.twig', [
            'controller_name' => 'PrzyplywWiaryController',
        ]);
    }
}
