<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	$faker = \Faker\Factory::create('App\Student');
        $gender = $faker->randomElements(['male','female'])[0];

        //Faker\Factory::create('App\Student');


        for($i = 1 ; $i <= 10 ; $i++){
        DB::table('students')->insert([
        	'first_name' => $faker->firstName($gender),
        	'last_name'  => $faker->lastName,
        	'gender'     => $gender,
        	'joined_year'=> $faker->year($max = 'now'),
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now(),
        ]);
      }
    }
}
