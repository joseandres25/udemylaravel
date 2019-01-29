<?php

    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            factory(\App\User::class, 1)->create([
                'first_name' => 'carlos',
                'last_name' => 'abris',
                'email' => 'dwes@iescierva.net',
                'password' => bcrypt('123456')
            ]);
            factory(\App\User::class,99)->create();

        }
    }
