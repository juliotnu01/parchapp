<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 4)->create();

        App\User::create([
        	'name' => 'juliot nuñez',
        	'email' => 'nunezjuliot@gmail.com',
        	'email_verified_at' => now(),
        	'password' => bcrypt('asdasd'),
        	'remember_token' => str_random(10),
        ]);
	}
}
