<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $cocktails = config('cocktails');

        foreach ($cocktails as $cocktail) {

            $coca = new Cocktail();
            // assegna valori specifici
    
            $coca->name = $cocktail['title'];
            $coca->ingredients = $cocktail['ingredients'];
            $coca->instructions = $cocktail['instructions'];


            //consolida el salvataggio del dato in tabella
            $coca->save();
        }

    }
}
