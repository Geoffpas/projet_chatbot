<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**************
         * UTILISATEURS
         **************/

        User::factory()->create([
            "prenom" => "Geoff",
            "nom" => "Pas",
            "email" => "geo@gmail.com"
        ]);

        // Ajout d'utilisateurs fictifs
        \App\Models\User::factory(5)->create();
    }
}
