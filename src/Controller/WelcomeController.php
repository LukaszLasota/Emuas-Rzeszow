<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/witaj", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'Witaj',
            'text' =>[
            [
                'one' => 'Miło nam, że możemy Cię tutaj powitać. Jesteśmy społecznością ludzi wierzących w Jezusa Chrystusa, uznających Pismo Święte za swój najwyższy autorytet w sprawach wiary. Wierzymy, że chrześcijaństwo jest relacją z żywym Bogiem, który może działać w naszym codziennym życiu. Pragniemy, aby każdy mógł usłyszeć dobrą nowinę o zbawieniu dzięki ofierze poniesionej na krzyżu przez Jezusa Chrystusa.' 
            ], 
            [
                'one' => 'Zapraszamy Cię do zapoznania się z zawartością naszej strony, na której możesz przeczytać więcej informacji o naszym wyznaniu, zobaczyć jak wygląda nasz kościół, a także poznać ludzi, którzy go tworzą.' 
            ], 
        ],
        'textBold' => 'Przyjdź i przekonaj się sam kim jesteśmy.'
        ]);
    }

}
