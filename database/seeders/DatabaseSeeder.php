<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run()
    {
        $this->call([
            QuizSeeder::class,
        ]);
    }
=======
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call(QuizSeeder::class);
}

>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
}
