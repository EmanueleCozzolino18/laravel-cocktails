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
        $cocktail = new Cocktail();

        for ($i=0; $i < 10 ; $i++) { 
            
            // assegna valori specifici
    
            $cocktail->name = $faker->sentence(1);
            $cocktail->ingredients = $faker->sentence(6);
            $cocktail->instructions = $faker->paragraph();
    
    
            //consolida el salvataggio del dato in tabella
            $cocktail->save();
        }

    }
}
