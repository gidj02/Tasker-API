<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

        User::truncate();

        User::create([
        	'name' => 'Gino de Jesus',
        	'email' => 'ginodejesus02@gmail.com',
        	'password' => Hash::make('Jesus')
    	]);

    	foreach(range(1,30) as $index)
        {
            User::create([
            	'name' => $faker->realText(15),
	        	'email' => $faker->unique()->email,
	        	'password' => Hash::make($faker->realText(10))
	    	]);
        }
    }
}
