<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project;
            $newProject->title = $faker->words(5, true);
            $newProject->content = $faker->paragraph(5, false);
            $newProject->image = $faker->imageUrl(360, 360, 'animals', true, 'cats', true, 'jpg');
            $newProject->link = $faker->url();
            $newProject->save();
        }
    }
}
