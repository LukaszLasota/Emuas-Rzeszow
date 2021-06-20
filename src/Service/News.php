<?php

namespace App\Service;

class News
{
    public function getPosts()
    {
        $news = [
            [
                'href' => '/piknik-rodzinny',
                'img' => '/img/news/22.jpg',
                'alt' => 'piknik rodzinny',
                'title' => ' Zapraszamy na PIKNIK RODZINNY',
                'postOne' => "W sobotę 26 czerwca 2021 r. będzie okazja abyśmy mogli zwyczajnie ze sobą się spotkać i porozmawiać. Będzie to również czas zabawy wspólnego śpiewania i oczywiście grillowania.",
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/w-zasiegu',
                'img' => '/img/news/21.jpg',
                'alt' => 'konferencji dla dzieci „W zasięgu Boga”.',
                'title' => '🎉W I T A J C I E 🎊',
                'postOne' => "Mamy dla was wspaniałą wiadomość!",
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/koncert-wielkanocny',
                'img' => '/img/news/20.jpg',
                'alt' => 'Koncert Wielkanocny „JEZUS ZMARTWYCHWSTAŁ” on-line.',
                'title' => 'Koncert Wielkanocny „JEZUS ZMARTWYCHWSTAŁ” on-line.',
                'postOne' => "Serdecznie zapraszamy na Koncert Wielkanocny „JEZUS ZMARTWYCHWSTAŁ” on-line. Transmisja odbędzie się 05.04.2021 r. (Poniedziałek Wielkanocny) o godzinie 18:00 na naszym kanale na YouTube.",
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/dzien-kobiet',
                'img' => '/img/news/19.jpg',
                'alt' => 'Dzień kobiet',
                'title' => 'DZIEŃ KOBIET',
                'postOne' => "Kochane siostry, KOBIETY 👩🌷. Już za niedługo święto, tak samo wyjątkowe jak każda z was – DZIEŃ KOBIET😍. ",
                'postTwo' => 'Z tej okazji zapraszam Was na spotkanie, które odbędzie się w niedzielę o godzinie 17.00 w budynku przy ulicy Dąbrowskiego 1a. ',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/seminarium-biblijne',
                'img' => '/img/news/18.jpg',
                'alt' => '„CZAS UCIEKA” - SEMINARIUM BIBLIJNE ON–LINE',
                'title' => '„CZAS UCIEKA” - SEMINARIUM BIBLIJNE ON–LINE',
                'postOne' => "Zapraszam CIĘ do wzięcia udziału w seminarium on-line przez aplikację ZOOM, poświęconemu tematyce Powtórnego przyjścia Pana naszego Jezusa Chrystusa.  Jestem pewien, że będzie to wyjątkowy czas zachęty i zbudowania dla każdego, kto czeka na powrót Zbawiciela.",
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/ogloszenie-nabozenstwa',
                'img' => '/img/news/13m.jpg',
                'alt' => 'Ogłoszenie Nabożeństwa',
                'title' => 'Ogłoszenie Nabożeństwa',
                'postOne' => "Informujemy, że ponownie odbywają się niedzielne nabożeństwa o godzinie 10.00 oraz środowe nabożeństwa o godzinie 18.00 w kaplicy naszego zboru przy ul. Dąbrowskiego 1a. Na nabożeństwo obowiązuje rejstracja pod numerem telefonu 17 85 29 641. Ilość miejsc jest ograniczona.",
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/ogloszenia-grudzien',
                'img' => '/img/news/17.jpg',
                'alt' => 'Ogłoszenia grudzień',
                'title' => 'Ogłoszenia grudzień',
                'postOne' => 'Ogromnie się cieszymy z każdej możliwości spotkania was na żywo (choć na razie nadal w ograniczonej ilości) oraz w formie on-line (zapraszamy wszystkich bez limitów). ',
                'postTwo' => 'Sprawdźcie jakie spotkania będziemy mieli jeszcze w tym roku 👇',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/zakup-kalendarzy',
                'img' => '/img/news/14.jpg',
                'alt' => 'Zakup kalendarzy',
                'title' => 'Zakup kalendarzy',
                'postOne' => 'Jeśli jeszcze nie zakupiliście kalendarzy 📅 na nowy 2021 rok to mamy dla was następujące propozycje dostępne w trzech formatach:',
                'postTwo' => '☑️ kalendarz ścienny miesięczny (wymiary po rozłożeniu 335 x 475 mm.) w cenie 17.00 zł',
                'postThree' => 'Czytaj dalej...',
                'value' => '10',
            ],
            [
                'href' => '/uwielbienie-w-trudnych-czasach-zdjecia',
                'img' => '/img/news/11.jpg',
                'alt' => 'Uwielbienie w trudnych czasach zdjęcia',
                'title' => 'Uwielbienie w trudnych czasach zdjęcia',
                'postOne' => 'Kolejne owocne spotkanie dla dzieciaków za nami 💪 To był niesamowity czas, gdyż mogliśmy się uczyć jak uwielbiać Jezusa i radować się w Jego obecności kiedy przeżywamy trudne chwile.',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => 5,
            ],
            [
                'href' => '/uwielbienie-w-trudnych-czasach',
                'img' => '/img/news/10.jpg',
                'alt' => 'Uwielbienie w trudnych czasach',
                'title' => 'Uwielbienie w trudnych czasach',
                'postOne' => 'Z okazji rozpoczęcia roku szkolnego , zapraszamy dzieci na kolejne spotkanie "Uwielbienie W Zasięgu"',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => 5,
            ],
            [
                'href' => '/splyw-kajakowy',
                'img' => '/img/news/9.jpg',
                'alt' => 'Spływ Kajakowy',
                'title' => 'Spływ Kajakowy',
                'postOne' => 'Zapraszamy do spędzenia wspólnego czasu podczas SPŁYWU KAJAKOWEGO, który odbędzie się 15 sierpnia (w sobotę).',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => 5,
            ],
            [
                'href' => '/uwielbienie-w-zasiegu-boga',
                'img' => '/img/news/8.jpg',
                'alt' => 'Uwielbienie w zasięgu Boga',
                'title' => 'Uwielbienie w zasięgu Boga',
                'postOne' => 'W ubiegłym roku nasze dzieci mogły uczestniczyć w konferencji W ZASIĘGU BOGA. Wierzymy, że to
                    był super czas dla dzieciaków, dlatego w tym roku powtórka!',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => 5,
            ],
            [
                'href' => '/informacje-nabozenstwa',
                'img' => '/img/news/7.jpg',
                'alt' => 'INFORMACJE NABOŻEŃSTWA',
                'title' => 'INFORMACJE NABOŻEŃSTWA',
                'postOne' => 'Informujemy, że ponownie odbywają się niedzielne nabożeństwa o godzinie 10.00 oraz środowe nabożeństwa o godzinie 18.00 w kaplicy naszego zboru przy ul. Dąbrowskiego 1a.',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => '10',
            ],
            [
                'href' => '/emaus-dla-dzieci',
                'img' => '/img/news/6.jpg',
                'alt' => 'Emaus dla dzieci',
                'title' => 'EMAUS DLA DZIECI',
                'postOne' => 'W najbliższą niedzielę zapraszamy wszystkie dzieci do uczestnictwa w szkółce online.',
                'postTwo' => 'Link do jej transmisji dostępny będzie w niedzielę rano na naszym Facebooku oraz stronie internetowej.',
                'postThree' => 'Czytaj dalej...',
                'value' => 5,
            ],
            [
                'href' => '/wieczerza-panska',
                'img' => '/img/news/5.jpg',
                'alt' => 'WIECZERZA PAŃSKA',
                'title' => 'WIECZERZA PAŃSKA',
                'postOne' => 'W najbliższą niedzielę podczas nabożeństwa chcemy uczestniczyć w Wieczerzy Pańskiej obchodzonej w naszych domach.',
                'postTwo' => 'Czytaj dalej...',
                'postThree' => '',
                'value' => 5,
            ],
            [
                'href' => '/studium-online',
                'img' => '/img/news/4.jpg',
                'alt' => 'STUDIUM ONLINE',
                'title' => 'STUDIUM ONLINE',
                'postOne' => 'Zapraszamy do studium online które odbędzie się w czwartek o godzinie 18.00.',
                'postTwo' => 'W celu uczestnictwa potrzebujesz pobrać aplikacje Zoom client meeting. Linki poniżej.',
                'postThree' => 'Czytaj dalej...',
                'value' => 10,
            ],
            [
                'href' => '/kawa-z-pastorem',
                'img' => '/img/news/3.jpg',
                'alt' => 'KAWA Z PASTORSTWEM',
                'title' => 'KAWA Z PASTORSTWEM',
                'postOne' => 'Cieszymy się, że kawa on-line z pastorem Markiem i jego żoną była wspaniale spędzonym czasem na rozmowach, wymianie poglądów oraz budowaniu siebie nawzajem. ',
                'postTwo' => 'Spotkanie będzie się odbywało raz w tygodniu w środę o godzinie 11.',
                'postThree' => 'Czytaj dalej...',
                'value' => 10,
            ],
            [
                'href' => '/przyplyw-wiary',
                'img' => '/img/news/2.jpg',
                'alt' => 'Przypływ Wiary',
                'title' => 'MOI DRODZY,',
                'postOne' => 'Polecamy  obejrzeć w ramach rodzinnego seansu piękny filmy oparty na faktach pt. „Przypływ wiary” z 2019 r. ',
                'postTwo' => 'Koniecznie musicie go zobaczyć.',
                'postThree' => 'Czytaj dalej...',
                'value' => 5,
            ],
            [
                'href' => '/komunikat',
                'img' => '/img/news/1.jpg',
                'alt' => 'komunikat"',
                'title' => 'MOI DRODZY,',
                'postOne' => 'Kwarantanna narodowa trwa już tydzień i mam nadzieję, że u was wszystko w porządku.  Wiem, że niektórzy z was chodzą nadal do pracy lub pracują zdalnie,',
                'postTwo' => '',
                'postThree' => 'Czytaj dalej...',
                'value' => 5,
            ],
        ];
        return $news;

        // $news = array_filter($news, fn ($news) => $news['value'] === $value);

        // if($count > 0){
        //     $tempNews = [];
        //     if(count($news)< $count){
        //         return $count;
        //     }
        //     for ($i = 0; $i < $count; $i++) {
        //         array_push($tempNews, $news[$i]);
        //     }
        //     return $tempNews;
        // } else{
        //     return $news;
        // }

    }
}