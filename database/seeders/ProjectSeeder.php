<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all();
        $types_id = $types->pluck('id');

        $technologies = Technology::all();
        $technologies_ids = $technologies->pluck('id');




        $langs = ['it-IT', 'en-US'];
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->sentence(5);
            $new_project->imageurl  = $faker->imageUrl(840, 680, 'random img', true);;
            $new_project->description = $faker->text(200);
            $new_project->stars = $faker->numberBetween(0, 5);
            $new_project->mainlanguage = $faker->randomElement($langs);
            $new_project->type_id = $faker->randomElement($types_id);

            $new_project->save();
            $new_project->technology()->attach($faker->randomElements($technologies_ids, null));
        }
    }
}
