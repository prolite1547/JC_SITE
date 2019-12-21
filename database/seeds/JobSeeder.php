<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Job');
          
        for($i = 1 ; $i <= 50 ; $i++){
        	DB::table('jobs')->insert([
        	'job_title' => $faker->sentence(),
        	'job_description' => $faker->sentence(),
            'job_type' => $faker->sentence(),
            'salary' => $faker->sentence(),
            'gender' => $faker->sentence(),
            'experience' => $faker->sentence(),
            'email' => $faker->sentence(),
            'contact_no' => $faker->sentence(),
            'job_company' => $faker->sentence(),
            'city' => $faker->sentence(),
            'job_location' => $faker->sentence(),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
        }
    }
}
