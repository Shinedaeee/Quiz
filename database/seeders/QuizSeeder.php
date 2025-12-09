<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [
            [
                'title' => 'Programowanie',
                'category' => 'IT',
                'questions' => [
                    ['Który język jest używany w Laravel?', 'php'],
                    ['JavaScript działa głównie po stronie:', 'przeglądarki'],
                    ['Co oznacza skrót OOP?', 'object-oriented programming'],
                    ['Który język jest kompilowany?', 'c++'],
                    ['GIT służy do:', 'kontroli wersji'],
                    ['CSS służy do:', 'stylowania stron'],
                    ['SQL jest językiem:', 'zapytaniowym'],
                    ['Który framework jest dla JavaScript?', 'react'],
                    ['Backend to:', 'logika serwera'],
                    ['Kompilator zamienia kod na:', 'kod maszynowy'],
                ],
            ],

            [
                'title' => 'Filmy i Seriale',
                'category' => 'Rozrywka',
                'questions' => [
                    ['Kto wyreżyserował „Titanic”?', 'james cameron'],
                    ['Serial o nauczycielu chemii:', 'breaking bad'],
                    ['Hogwart pochodzi z:', 'harry potter'],
                    ['Batman to bohater z:', 'dc'],
                    ['Postać z Avengers:', 'iron man'],
                    ['W filmie „Matrix” Neo gra:', 'keanu reeves'],
                    ['Film z dinozaurami:', 'jurassic park'],
                    ['Który serial opowiada o zombie?', 'the walking dead'],
                    ['Gollum pochodzi z:', 'władca pierścieni'],
                    ['„Wakanda” pochodzi z:', 'black panther'],
                ],
            ],

            [
                'title' => 'Muzyka',
                'category' => 'Kultura',
                'questions' => [
                    ['Kto śpiewa „Billie Jean”?', 'michael jackson'],
                    ['Zespół Metallica gra:', 'metal'],
                    ['Instrument strunowy:', 'gitara'],
                    ['„Bohemian Rhapsody” wykonuje:', 'queen'],
                    ['Muzyka klasyczna kojarzy się z:', 'mozart'],
                    ['Kto śpiewa „Shape of You”?', 'ed sheeran'],
                    ['Najpopularniejszy instrument perkusyjny:', 'perkusja'],
                    ['Rap najczęściej kojarzy się z:', 'rymowaniem'],
                    ['Zespół z Australii:', 'ac/dc'],
                    ['Muzyka techno jest:', 'elektroniczna'],
                ],
            ],

            [
                'title' => 'Zwierzęta',
                'category' => 'Nauka',
                'questions' => [
                    ['Największy kot świata:', 'tygrys'],
                    ['Ptak, który nie lata:', 'pingwin'],
                    ['Największy ssak:', 'płetwal błękitny'],
                    ['Panda żywi się głównie:', 'bambusem'],
                    ['Szybki drapieżnik:', 'gepard'],
                    ['Krowa daje:', 'mleko'],
                    ['Zwierzę domowe:', 'pies'],
                    ['Zwierzę w oceanach:', 'delfin'],
                    ['Mały koń to:', 'źrebak'],
                    ['Największy ptak:', 'struś'],
                ],
            ],

            [
                'title' => 'Technologia',
                'category' => 'IT',
                'questions' => [
                    ['Apple tworzy:', 'iphone'],
                    ['Android należy do:', 'google'],
                    ['GPU odpowiada za:', 'grafikę'],
                    ['SSD to dysk:', 'półprzewodnikowy'],
                    ['5G dotyczy:', 'łączności mobilnej'],
                    ['VR oznacza:', 'virtual reality'],
                    ['Laptop to:', 'komputer przenośny'],
                    ['USB służy do:', 'łączenia urządzeń'],
                    ['Co to jest AI?', 'sztuczna inteligencja'],
                    ['Kto stworzył Windows?', 'microsoft'],
                ],
            ],

            [
                'title' => 'Gry komputerowe',
                'category' => 'Gaming',
                'questions' => [
                    ['Główna postać w „Wiedźminie”:', 'geralt'],
                    ['Minecraft został napisany w:', 'java'],
                    ['Gry typu FPS to:', 'strzelanki'],
                    ['Postać Mario pochodzi z:', 'nintendo'],
                    ['Gra o piłce nożnej:', 'fifa'],
                    ['GTA to skrót od:', 'grand theft auto'],
                    ['Fortnite to gra typu:', 'battle royale'],
                    ['League of Legends to:', 'moba'],
                    ['Kratos pochodzi z:', 'god of war'],
                    ['Konsola Sony to:', 'playstation'],
                ],
            ],

            [
                'title' => 'Kosmos',
                'category' => 'Nauka',
                'questions' => [
                    ['Najbliższa gwiazda Ziemi:', 'słońce'],
                    ['Pierścienie ma planeta:', 'saturn'],
                    ['Czarna dziura to:', 'obszar o ogromnej grawitacji'],
                    ['Która planeta jest czerwona?', 'mars'],
                    ['Galaktyka, w której żyjemy:', 'droga mleczna'],
                    ['NASA zajmuje się:', 'kosmosem'],
                    ['Księżyc Ziemi to:', 'luna'],
                    ['Astronautą jest:', 'neil armstrong'],
                    ['Słońce jest:', 'gwiazdą'],
                    ['Statek kosmiczny to:', 'apollo'],
                ],
            ],

            [
                'title' => 'Kuchnia i jedzenie',
                'category' => 'Lifestyle',
                'questions' => [
                    ['Sushi pochodzi z:', 'japonii'],
                    ['Główny składnik pizzy:', 'ciasto'],
                    ['Hummus robimy z:', 'ciecierzycy'],
                    ['Tiramisu pochodzi z:', 'włoch'],
                    ['Zupa miso pochodzi z:', 'japonii'],
                    ['Potrawa z mięsa mielonego:', 'klopsiki'],
                    ['Co jest ostre?', 'papryczka chili'],
                    ['Kebab pochodzi z:', 'turcji'],
                    ['Guacamole robimy z:', 'awokado'],
                    ['Słodki deser to:', 'lody'],
                ],
            ]
        ];

        foreach ($quizzes as $data) {

            $quiz = Quiz::create([
                'title' => $data['title'],
                'category' => $data['category'],
                'description' => $data['title']
            ]);

            foreach ($data['questions'] as $q) {
                Question::create([
                    'quiz_id' => $quiz->id,
                    'text' => $q[0],
                    'correct_answer' => strtolower($q[1])
                ]);
            }
        }
    }
}
