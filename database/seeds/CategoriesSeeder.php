<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Categorie::class,1)->create([
            'name' => 'amigo',
            'description' => 'amigos del user'
        ]);
        factory(\App\Categorie::class,1)->create([
            'name' => 'familia',
            'description' => 'familia del user'
        ]);
        factory(\App\Categorie::class,1)->create([
            'name' => 'trabajo',
            'description' => 'trabajo del user'
        ]);
        factory(\App\Categorie::class,7)->create();
    }
}
