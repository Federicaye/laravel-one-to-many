<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = ['carote', 'cipolle', 'broccoli', 'peperoni', 'melanzane'];
        foreach ($ingredients as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient;
            $newIngredient->save();
        }
    }
}
