<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;
    //INCLUDIAMO LA TABLE COCKTAILS

    public function getCocktails()
    {
        $cocktails = 'cocktails';
    }

    //INCLUDIAMO I CAMPI CHE POSSONO ESSERE RIEMPITI

}
