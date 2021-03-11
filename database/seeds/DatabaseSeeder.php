<?php

use Illuminate\Database\Seeder;
use App\Projet;
use App\Log;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();
        factory(projet::class,10)->create();
        factory(Log::class,10)->create();
    }
}
