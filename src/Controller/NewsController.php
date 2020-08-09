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
            // 'news' => $news->getPosts()
            'allPosts' => [
                [
                    'href' => '/splyw-kajakowy"',
                    'img'=> '/img/news/9.jpg',
                    'alt' => 'Spływ Kajakowy', 
                    'title' => 'Spływ Kajakowy', 
                    'postOne' => 'Zapraszamy do spędzenia wspólnego czasu podczas SPŁYWU KAJAKOWEGO, który odbędzie się 15 sierpnia (w sobotę).',
                    'postTwo' => 'Czytaj dalej...',
                    'postThree' => '',
                    'value' => 5,
                ],
                [
                    'href' => '/uwielbienie-w-zasiegu-Boga',
                    'img'=> '/img/news/8.jpg',
                    'alt' => 'Uwielbienie w zasięgu Boga', 
                    'title' => 'Uwielbienie w zasięgu Boga', 
                    'postOne' => 'W ubiegłym roku nasze dzieci mogły uczestniczyć w konferencji W ZASIĘGU BOGA. Wierzymy, że to
                    był super czas dla dzieciaków, dlatego w tym roku powtórka!',
                    'postTwo' => 'Czytaj dalej...',
                    'postThree' => '',
                    'value' => 5,
                ],
                [
                'href'=>'/informacje-nabozenstwa',
                'img'=> '/img/news/7.jpg',
                'alt' => 'INFORMACJE NABOŻEŃSTWA',
                'title' => 'INFORMACJE NABOŻEŃSTWA', 
                'postOne' => 'Informujemy, że ponownie odbywają się niedzielne nabożeństwa o godzinie 10.00 oraz środowe nabożeństwa o godzinie 18.00 w kaplicy naszego zboru przy ul. Dąbrowskiego 1a.',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => '10',
                ],
                [
                    'href' => '/emaus-dla-dzieci',
                    'img'=> '/img/news/6.jpg',
                    'alt' => 'Emaus dla dzieci',
                    'title' => 'EMAUS DLA DZIECI', 
                    'postOne' => 'W najbliższą niedzielę zapraszamy wszystkie dzieci do uczestnictwa w szkółce online.',
                    'postTwo' => 'Link do jej transmisji dostępny będzie w niedzielę rano na naszym Facebooku oraz stronie internetowej.',
                    'postThree' => 'Czytaj dalej...',
                    'value' => 5,
                ],
                [
                    'href'=>'/wieczerza-pańska',
                    'img'=> '/img/news/5.jpg',
                    'alt' => 'WIECZERZA PAŃSKA',
                    'title' => 'WIECZERZA PAŃSKA', 
                    'postOne' => 'W najbliższą niedzielę podczas nabożeństwa chcemy uczestniczyć w Wieczerzy Pańskiej obchodzonej w naszych domach.',
                    'postTwo' => 'Czytaj dalej...',
                    'postThree' => '',
                    'value' => 5,
                ],
                [
                    'href'=>'/studium-online',
                    'img'=> '/img/news/4.jpg',
                    'alt' => 'STUDIUM ONLINE',
                    'title' => 'STUDIUM ONLINE', 
                    'postOne' => 'Zapraszamy do studium online które odbędzie się w czwartek o godzinie 18.00.',
                    'postTwo' => 'W celu uczestnictwa potrzebujesz pobrać aplikacje Zoom client meeting. Linki poniżej.',
                    'postThree' => 'Czytaj dalej...',
                    'value' => 10,
                ],
                [
                    'href'=>'/kawa-z-pastorem',
                    'img'=> '/img/news/3.jpg',
                    'alt' => 'KAWA Z PASTORSTWEM',
                    'title' => 'KAWA Z PASTORSTWEM', 
                    'postOne' => 'Cieszymy się, że kawa on-line z pastorem Markiem i jego żoną była wspaniale spędzonym czasem na rozmowach, wymianie poglądów oraz budowaniu siebie nawzajem. ',
                    'postTwo' => '<span class="red">Spotkanie będzie się odbywało raz w tygodniu w środę o godzinie 11. </span>',
                    'postThree' => 'Czytaj dalej...',
                    'value' => 10,
                ],
                [
                    'href'=>'/przyplyw-wiary',
                    'img'=> '/img/news/2.jpg',
                    'alt' => 'Przypływ Wiary',
                    'title' => 'MOI DRODZY,', 
                    'postOne' => 'Polecamy  obejrzeć w ramach rodzinnego seansu piękny filmy oparty na faktach pt. „Przypływ wiary” z 2019 r. ',
                    'postTwo' => 'Koniecznie musicie go zobaczyć.',
                    'postThree' => 'Czytaj dalej...',
                    'value' => 5,
                ],
                [
                    'href'=>'/komunikat',
                    'img'=> '/img/news/1.jpg',
                    'alt' => 'komunikat"',
                    'title' => 'MOI DRODZY,', 
                    'postOne' => 'Kwarantanna narodowa trwa już tydzień i mam nadzieję, że u was wszystko w porządku.  Wiem, że niektórzy z was chodzą nadal do pracy lub pracują zdalnie,',
                    'postTwo' => '',
                    'postThree' => 'Czytaj dalej...',
                    'value' => 5,
                ],
            ]            
            ]);
    }
}
