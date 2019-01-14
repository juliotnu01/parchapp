<?php

use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\restaurant::class, 5)
        ->create()->each(function(App\restaurant $restaurant){
        	$restaurant->users();
        });
    }
}
