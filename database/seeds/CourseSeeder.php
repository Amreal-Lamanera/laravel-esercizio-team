<?php

use Illuminate\Database\Seeder;
use App\Degree;
use App\Course;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $degrees = Degree::all()->pluck('id');
        foreach ($degrees as $degree_id) {

            for ($i = 0; $i < 30; $i++) {

                $website = $faker->optional()->url();

                $c = new Course();
                $c->degree_id = $degree_id;
                $c->name = $faker->words(rand(2, 5), true);
                $c->description = $faker->optional()->paragraphs(rand(2, 5), true);
                $c->period = $faker->randomElement(['I semestre', 'II semestre']);
                $c->year = $faker->randomElement([1, 2, 3, 4, 5, 6]);
                $c->cfu = $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 20, 30]);
                $c->website = $website;

                $c->save();
            }
        }
    }
}
