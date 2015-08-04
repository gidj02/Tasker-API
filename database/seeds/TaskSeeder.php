<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Task::truncate();

        $faker = Faker::create();

    	foreach(range(1,30) as $index) {
	        Task::create([
                'name' =>  $faker->realText(20),
	        	'description' =>  $faker->realText(50),
	        	'status' => false,
	        	'deadline' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now')
	    	]);
    	}
    }
}
