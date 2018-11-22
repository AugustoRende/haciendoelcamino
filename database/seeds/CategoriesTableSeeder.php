<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'code' => 'atractions',
            'name' => 'Atracciones',
            'description' => 'Descripción de la categoría Atracciones',
        ]);
        
        Category::create([
            'code' => 'places',
            'name' => 'Lugares',
            'description' => 'Descripción de la categoría Lugares',
        ]);

        Category::create([
            'code' => 'recipes',
            'name' => 'Recetas',
            'description' => 'Descripción de la categoría Recetas',
        ]);

        Category::create([
            'code' => 'tutorials',
            'name' => 'Tutoriales',
            'description' => 'Descripción de la categoría Tutoriales',
        ]);

        Category::create([
            'code' => 'restauracion',
            'name' => 'La Restauración',
            'description' => 'Descripción de la categoría La Restauración',
        ]);
    }
}
