<?php

use Illuminate\Database\Seeder;

use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for ($i = 0; $i < 500; $i++){

            $newStudent = new Student();
            $newStudent->name = $faker->firstName();
            $newStudent->surname = $faker->lastName();
            $newStudent->date_of_birth =  $faker->date();
            $newStudent->fiscal_code = $faker->taxId();
            $newStudent->enrollment_date = $faker->date();
            $newStudent->registration_number = $faker->unique()->randomNumber(5, true);
            $newStudent->email = $faker->email();

            $newStudent->save();
        }
    }
}
