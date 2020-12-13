<?php

namespace App\Controller;

use App\Service\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
                    'href' => '#Two',
                    'name' => 'Aktualności',
                ],
                [
                    'href' => '#Three',
                    'name' => 'kim jesteśmy',
                ],
                [
                    'href' => '#Four',
                    'name' => 'nasze spotkania',
                ],
                [
                    'href' => '#Five',
                    'name' => 'kontakt',
                ],
            ],
            'meetings' => [
                [
                    'name' => 'Nabożeństwo niedzielne',
                    'time' => 'Niedziela: 10.00',
                    'place' => 'ul. Dąbrowskiego 1a',
                    'text' => 'Nabożeństwa odbywają się w każdą niedzielę o godzinie 10:00 w Rzeszowie,przy ul.
                Dąbrowskiego 1a (w kaplicy zboru). Istnieje możliwość tłumaczenia nabożeństwa na język angielski. Obecnie z uwagi na wprowadzone ograniczenia obowiązuje rejstracja telefoniczna pod numerem telefonu 17 85 29 641. Ilość miejsc jest ograniczona. Dostępna jest transmisja online z nabożeństw pod linkiem: ',
                    'href' => 'https://www.youtube.com/channel/UCnjQJvg70iKbJLsJ4UX4rxA',
                    'hrefText' => 'www.youtube.com/channel',
                ],
                [
                    'name' => 'Spotkania modlitewne',
                    'time' => 'Niedziela: 9.15',
                    'place' => 'ul. Dąbrowskiego 1a',
                    'text' => 'Spotkania odbywają się w każdą niedzielę o godzinie 9:15 przed nabożeństwem niedzielnym przy ul. Dąbrowskiego 1a (w kaplicy zboru). Jeśli masz jakiś problem z którym się borykasz, nie widzisz rozwiązania i celu w swoim życiu, to przyjdź – chętnie się pomodlimy o Ciebie lub o Twoich bliskich.',
                    'href' => '',
                    'hrefText' => '',
                ],
                [
                    'name' => 'Studium Online',
                    'time' => 'Czwartek: 18.00',
                    'place' => 'Online',
                    'text' => 'Spotkania odbywaja się przez aplikacje ZOOM, wiecej szczegw pod linkiem:',
                    'href' => '/studium-online',
                    'hrefText' => 'www.emaus.rzeszow.pl/studium-online',
                ],
                [
                    'name' => 'Kawa z pastorem',
                    'time' => 'Środa: 11.00',
                    'place' => 'Online',
                    'text' => 'Spotkania odbywaja się przez aplikacje ZOOM, wiecej szczegw pod linkiem:',
                    'href' => '/kawa-z-pastorem',
                    'hrefText' => 'www.emaus.rzeszow.pl/kawa-z-pastorem',
                ],
                [
                    'name' => 'Nabożeństwo środowe',
                    'time' => 'Środa: 18.00',
                    'place' => 'Online',
                    'text' => 'Środowe nabożeństwa zostają zawieszone do końca tego roku. Proponujemy jednak spotkanie online w każdą środę o godzinie 18.00. Spotkanie odbędzie sie poprzez aplikację zoom, pod tym samym linkiem co kawa z pastorem oraz studium online, link:',
                    'href' => 'https://us04web.zoom.us/j/5367440361/',
                    'hrefText' => 'https://us04web.zoom.us/',
                ],
                [
                    'name' => 'Royal Rangers',
                    'time' => 'Piątek: 18.00',
                    'place' => 'ul. Dąbrowskiego 1a',
                    'text' => 'Spotkania obecnie są zawieszone, po więcej szczegółów zapraszamy na stronę:',
                    'href' => 'http://www.royalrangers.pl/',
                    'hrefText' => 'www.royalrangers.pl/',
                ],
                [
                    'name' => 'Spotkania studenckie',
                    'time' => 'Wtorek: 19.00',
                    'place' => 'ul. Dąbrowskiego 1a',
                    'text' => 'Spotkania odbywaja się online, po więcej szczegółów zapraszamy na stronę:',
                    'href' => 'https://www.facebook.com/Dynamis-MR-1273639636074462/',
                    'hrefText' => 'www.facebook.com/Dynamis-MR',
                ],
                [
                    'name' => 'Akcja Humanitarna "Życie"',
                    'time' => 'Czwartek: 18.00',
                    'place' => 'ul. Dąbrowskiego 1a',
                    'text' => 'Spotkania obecnie są zawieszone, po więcej szczegółów zapraszamy na stronę:',
                    'href' => 'http://ahzycie.com/',
                    'hrefText' => 'www.ahzycie.com',
                ],
            ],
        ]);
    }
}