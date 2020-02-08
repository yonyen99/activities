<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($j=0;$j<10;$j++){
         DB::table('students')->insert([
             'FirstName'=>$faker->firstName,
             'LastName' =>$faker->lastName,
             'age'=>$faker->numberBetween($min = 15, $max = 25) // 8567.number(2)
         ]);
        }
    }
}
