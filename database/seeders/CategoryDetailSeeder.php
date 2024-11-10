<?php

namespace Database\Seeders;

use Database\Seeders\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\CategoryDetail as CategoryDetailModel;
use Illuminate\Support\Str;

class CategoryDetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        CategoryDetailModel::create([
            'category_id' => 1,
            'name' => 'Human and Computer Interaction',
            'slug' => Str::slug('Human and Computer Interaction'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')
        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' => 'User Experience',
            'slug' => Str::slug('User Experience'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')


        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' => 'User Experience for Digital Immersive Technology',
            'slug' => Str::slug('User Experience for Digital Immersive Technology'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')


        ]);

        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Pattern Software Design',
            'slug' => Str::slug('Pattern Software Design'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')


        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Agile Software Development',
            'slug' => Str::slug('Agile Software Development'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')


        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Code Reengineering',
            'slug' => Str::slug('Code Reengineering'),
            'description' => collect(range(1, mt_rand(5, 10)))  // Generates 5 to 10 items (paragraphs)
    ->map(fn() => "<p>" . $faker->text(2000) . "</p>") // Each paragraph is generated with 2000 characters (or adjust as needed)
    ->implode('')


        ]);
    }
}
