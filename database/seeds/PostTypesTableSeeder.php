<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            'code' => 'quote',
            'description' => 'Frases',
        ]);

        PostType::create([
            'code' => 'gallery',
            'description' => 'Galerias',
        ]);

        PostType::create([
            'code' => 'standard',
            'description' => 'Imagenes',
        ]);

        PostType::create([
            'code' => 'video',
            'description' => 'Videos',
        ]);
    }
}
