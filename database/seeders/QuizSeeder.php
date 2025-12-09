<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
<<<<<<< HEAD
=======
use App\Models\Answer;
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08

class QuizSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [
<<<<<<< HEAD
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

=======

            1 => [
                'title' => 'Programowanie',
                'image' => 'programowanie.jpg',
                'questions' => [
                    ['question' => 'Który język jest używany w Laravel?', 'answers' => ['Python', 'PHP', 'Ruby'], 'correct' => 1],
                    ['question' => 'JavaScript działa głównie po stronie:', 'answers' => ['Serwera', 'Przeglądarki', 'Bazy danych'], 'correct' => 1],
                    ['question' => 'Co oznacza skrót OOP?', 'answers' => ['Object-Oriented Programming', 'Oriented Object Protocol', 'Object Operational Process'], 'correct' => 0],
                    ['question' => 'Który język jest kompilowany?', 'answers' => ['Java', 'PHP', 'JavaScript'], 'correct' => 0],
                    ['question' => 'GIT służy do:', 'answers' => ['Przechowywania kodu', 'Tworzenia grafik', 'Hosting stron'], 'correct' => 0],
                    ['question' => 'CSS służy do:', 'answers' => ['Stylowania stron', 'Zapisu danych', 'Pisania backendu'], 'correct' => 0],
                    ['question' => 'SQL jest językiem:', 'answers' => ['Programowania', 'Zapytaniowym', 'Stylowania'], 'correct' => 1],
                    ['question' => 'Który framework jest dla JavaScript?', 'answers' => ['Vue', 'Laravel', 'Django'], 'correct' => 0],
                    ['question' => 'Backend to:', 'answers' => ['Część widoczna', 'Logika serwera', 'Stylowanie'], 'correct' => 1],
                    ['question' => 'Kompilator zamienia kod na:', 'answers' => ['Stronę HTML', 'Kod maszynowy', 'Obraz PNG'], 'correct' => 1],
                ]
            ],

            2 => [
                'title' => 'Filmy i Serialne',
                'image' => 'filmy.jpg',
                'questions' => [
                    ['question' => 'Kto wyreżyserował „Titanic”?', 'answers' => ['James Cameron', 'Peter Jackson', 'Ridley Scott'], 'correct' => 0],
                    ['question' => 'Serial o nauczycielu chemii:', 'answers' => ['Narcos', 'Breaking Bad', 'The Wire'], 'correct' => 1],
                    ['question' => 'Hogwart pochodzi z:', 'answers' => ['Hobbita', 'Harry’ego Pottera', 'Władcy Pierścieni'], 'correct' => 1],
                    ['question' => 'Batman to bohater z:', 'answers' => ['Marvel', 'DC', 'Dark Horse'], 'correct' => 1],
                    ['question' => 'Postać z Avengers:', 'answers' => ['Gandalf', 'Iron Man', 'Shrek'], 'correct' => 1],
                    ['question' => 'W filmie „Matrix” Neo gra:', 'answers' => ['Keanu Reeves', 'Tom Cruise', 'Brad Pitt'], 'correct' => 0],
                    ['question' => 'Film z dinozaurami:', 'answers' => ['Jurassic Park', 'Avatar', 'Incepcja'], 'correct' => 0],
                    ['question' => 'Który serial opowiada o zombie?', 'answers' => ['The Walking Dead', 'Suits', 'Friends'], 'correct' => 0],
                    ['question' => 'Gollum pochodzi z:', 'answers' => ['Star Wars', 'Władcy Pierścieni', 'Matrixa'], 'correct' => 1],
                    ['question' => '„Wakanda” pochodzi z:', 'answers' => ['Spider-Man', 'Black Panther', 'Thor'], 'correct' => 1],
                ]
            ],

            3 => [
                'title' => 'Muzyka',
                'image' => 'muzyka.jpg',
                'questions' => [
                    ['question' => 'Kto śpiewa „Billie Jean”?', 'answers' => ['Michael Jackson', 'Bruno Mars', 'Elvis Presley'], 'correct' => 0],
                    ['question' => 'Zespół Metallica gra:', 'answers' => ['Jazz', 'Rock/Metal', 'Pop'], 'correct' => 1],
                    ['question' => 'Instrument strunowy:', 'answers' => ['Gitara', 'Trąbka', 'Flet'], 'correct' => 0],
                    ['question' => '„Bohemian Rhapsody” wykonuje:', 'answers' => ['Queen', 'AC/DC', 'Beatles'], 'correct' => 0],
                    ['question' => 'Muzyka klasyczna kojarzy się z:', 'answers' => ['Chopin', 'Eminem', 'Drake'], 'correct' => 0],
                    ['question' => 'Kto śpiewa „Shape of You”?', 'answers' => ['Ed Sheeran', 'The Weeknd', 'Sam Smith'], 'correct' => 0],
                    ['question' => 'Najpopularniejszy instrument perkusyjny:', 'answers' => ['Bęben', 'Gitara', 'Skrzypce'], 'correct' => 0],
                    ['question' => 'Rap najczęściej kojarzy się z:', 'answers' => ['Szybką mową', 'Śpiewem operowym', 'Elektroniką'], 'correct' => 0],
                    ['question' => 'Zespół z Australii:', 'answers' => ['Metallica', 'AC/DC', 'Queen'], 'correct' => 1],
                    ['question' => 'Muzyka techno jest:', 'answers' => ['Elektroniczna', 'Rockowa', 'Symfoniczna'], 'correct' => 0],
                ]
            ],

            4 => [
                'title' => 'Zwierzęta',
                'image' => 'zwierzeta.jpg',
                'questions' => [
                    ['question' => 'Największy kot świata:', 'answers' => ['Tygrys', 'Lew', 'Gepard'], 'correct' => 0],
                    ['question' => 'Ptak, który nie lata:', 'answers' => ['Gołąb', 'Pingwin', 'Sokół'], 'correct' => 1],
                    ['question' => 'Największy ssak:', 'answers' => ['Słoń', 'Płetwal błękitny', 'Hipopotam'], 'correct' => 1],
                    ['question' => 'Panda żywi się głównie:', 'answers' => ['Bambusem', 'Mięsem', 'Ryżem'], 'correct' => 0],
                    ['question' => 'Szybki drapieżnik:', 'answers' => ['Gepard', 'Lew', 'Hiena'], 'correct' => 0],
                    ['question' => 'Krowa daje:', 'answers' => ['Mleko', 'Miód', 'Jajka'], 'correct' => 0],
                    ['question' => 'Zwierzę domowe:', 'answers' => ['Tygrys', 'Koń', 'Kot'], 'correct' => 2],
                    ['question' => 'Zwierzę w Oceanach:', 'answers' => ['Rekin', 'Słoń', 'Bocian'], 'correct' => 0],
                    ['question' => 'Mały koń to:', 'answers' => ['Źrebię', 'Cielak', 'Prosiak'], 'correct' => 0],
                    ['question' => 'Największy ptak:', 'answers' => ['Struś', 'Orzeł', 'Kondor'], 'correct' => 0],
                ]
            ],

            5 => [
                'title' => 'Technologia',
                'image' => 'technologia.jpg',
                'questions' => [
                    ['question' => 'Apple tworzy:', 'answers' => ['iPhone', 'Galaxy', 'Pixel'], 'correct' => 0],
                    ['question' => 'Android należy do:', 'answers' => ['Microsoftu', 'Google', 'Sony'], 'correct' => 1],
                    ['question' => 'GPU odpowiada za:', 'answers' => ['Grafikę', 'Internet', 'Dźwięk'], 'correct' => 0],
                    ['question' => 'SSD to dysk:', 'answers' => ['Wolny', 'Szybki', 'Mechaniczny'], 'correct' => 1],
                    ['question' => '5G dotyczy:', 'answers' => ['Łącza internetowego', 'Telewizji', 'Drukarek'], 'correct' => 0],
                    ['question' => 'VR oznacza:', 'answers' => ['Virtual Reality', 'Video Response', 'Virtual Radio'], 'correct' => 0],
                    ['question' => 'Laptop to:', 'answers' => ['Komputer przenośny', 'Telefon', 'Tablet'], 'correct' => 0],
                    ['question' => 'USB służy do:', 'answers' => ['Ładowania', 'Przesyłania danych', 'Obu powyższych'], 'correct' => 2],
                    ['question' => 'Co to jest AI?', 'answers' => ['Sztuczna inteligencja', 'System audio', 'Rodzaj pamięci'], 'correct' => 0],
                    ['question' => 'Kto stworzył Windows?', 'answers' => ['Microsoft', 'Google', 'Apple'], 'correct' => 0],
                ]
            ],

            6 => [
                'title' => 'Gry komputerowe',
                'image' => 'gry.jpg',
                'questions' => [
                    ['question' => 'Główna postać w „Wiedźminie”:', 'answers' => ['Altair', 'Geralt', 'Kratos'], 'correct' => 1],
                    ['question' => 'Minecraft został napisany w:', 'answers' => ['Java', 'C#', 'Python'], 'correct' => 0],
                    ['question' => 'Gry typu FPS to:', 'answers' => ['Strzelanki', 'Strategie', 'Wyścigi'], 'correct' => 0],
                    ['question' => 'Postać Mario pochodzi z:', 'answers' => ['Nintendo', 'PlayStation', 'Xbox'], 'correct' => 0],
                    ['question' => 'Gra o piłce nożnej:', 'answers' => ['FIFA', 'Forza', 'NBA 2K'], 'correct' => 0],
                    ['question' => 'GTA to skrót od:', 'answers' => ['Grand Theft Auto', 'Great Tank Arena', 'Gun Training Area'], 'correct' => 0],
                    ['question' => 'Fortnite to gra typu:', 'answers' => ['Battle Royale', 'RPG', 'Symulator'], 'correct' => 0],
                    ['question' => 'League of Legends to:', 'answers' => ['MOBA', 'FPS', 'Puzzle'], 'correct' => 0],
                    ['question' => 'Kratos pochodzi z:', 'answers' => ['God of War', 'Dark Souls', 'Halo'], 'correct' => 0],
                    ['question' => 'Konsola Sony to:', 'answers' => ['Xbox', 'Switch', 'PlayStation'], 'correct' => 2],
                ]
            ],

            7 => [
                'title' => 'Kosmos',
                'image' => 'kosmos.jpg',
                'questions' => [
                    ['question' => 'Najbliższa gwiazda Ziemi:', 'answers' => ['Mars', 'Słońce', 'Wenus'], 'correct' => 1],
                    ['question' => 'Pierścienie ma planeta:', 'answers' => ['Jowisz', 'Saturn', 'Mars'], 'correct' => 1],
                    ['question' => 'Czarna dziura to:', 'answers' => ['Gwiazda', 'Obszar o ogromnej grawitacji', 'Kometa'], 'correct' => 1],
                    ['question' => 'Która planeta jest czerwona?', 'answers' => ['Mars', 'Uran', 'Saturn'], 'correct' => 0],
                    ['question' => 'Galaktyka, w której żyjemy:', 'answers' => ['Andromeda', 'Droga Mleczna', 'Magellana'], 'correct' => 1],
                    ['question' => 'NASA zajmuje się:', 'answers' => ['Kosmosem', 'Lekami', 'Motoryzacją'], 'correct' => 0],
                    ['question' => 'Księżyc Ziemi to:', 'answers' => ['Europa', 'Luna', 'Fobos'], 'correct' => 1],
                    ['question' => 'Astronautą jest:', 'answers' => ['Osoba latająca w kosmos', 'Kapitan statku', 'Pilot drona'], 'correct' => 0],
                    ['question' => 'Słońce jest:', 'answers' => ['Planetą', 'Gwiazdą', 'Kometą'], 'correct' => 1],
                    ['question' => 'Statek kosmiczny to:', 'answers' => ['Rakieta', 'Łódź', 'Samochód'], 'correct' => 0],
                ]
            ],

            8 => [
                'title' => 'Kuchnia i Jedzenie',
                'image' => 'jedzenie.jpg',
                'questions' => [
                    ['question' => 'Sushi pochodzi z:', 'answers' => ['Chin', 'Japonii', 'Korei'], 'correct' => 1],
                    ['question' => 'Główny składnik pizzy:', 'answers' => ['Makaron', 'Ciasto', 'Ryż'], 'correct' => 1],
                    ['question' => 'Hummus robimy z:', 'answers' => ['Ciecierzycy', 'Fasoli', 'Grochu'], 'correct' => 0],
                    ['question' => 'Tiramisu pochodzi z:', 'answers' => ['Włoch', 'Niemiec', 'Hiszpanii'], 'correct' => 0],
                    ['question' => 'Zupa miso pochodzi z:', 'answers' => ['Chin', 'Japonii', 'Wietnamu'], 'correct' => 1],
                    ['question' => 'Potrawa z mięsa mielonego:', 'answers' => ['Kotlet mielony', 'Sushi', 'Lody'], 'correct' => 0],
                    ['question' => 'Co jest ostre?', 'answers' => ['Papryczka chili', 'Ziemniak', 'Chleb'], 'correct' => 0],
                    ['question' => 'Kebab pochodzi z:', 'answers' => ['Turcji', 'Polski', 'Hiszpanii'], 'correct' => 0],
                    ['question' => 'Guacamole robimy z:', 'answers' => ['Awokado', 'Pomidorów', 'Ziemniaków'], 'correct' => 0],
                    ['question' => 'Słodki deser to:', 'answers' => ['Lody', 'Stek', 'Zupa'], 'correct' => 0],
                ]
            ],

        ];

        // ZAPIS DO BAZY
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
        foreach ($quizzes as $data) {

            $quiz = Quiz::create([
                'title' => $data['title'],
<<<<<<< HEAD
                'category' => $data['category'],
                'description' => $data['title']
            ]);

            foreach ($data['questions'] as $q) {
                Question::create([
                    'quiz_id' => $quiz->id,
                    'text' => $q[0],
                    'correct_answer' => strtolower($q[1])
                ]);
=======
                'image' => $data['image'],
            ]);

            foreach ($data['questions'] as $q) {

                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $q['question'],
                ]);

                foreach ($q['answers'] as $i => $answerText) {

                    Answer::create([
                        'question_id' => $question->id,
                        'answer_text' => $answerText,
                        'is_correct' => $i === $q['correct'],
                    ]);
                }
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
            }
        }
    }
}
