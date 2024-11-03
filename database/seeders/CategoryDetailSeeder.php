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
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5), 
                $faker->paragraph(5), 
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' => 'User Experience',
            'slug' => Str::slug('User Experience'),
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 1,
            'name' => 'User Experience for Digital Immersive Technology',
            'slug' => Str::slug('User Experience for Digital Immersive Technology'),
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);

        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Pattern Software Design',
            'slug' => Str::slug('Pattern Software Design'),
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Agile Software Development',
            'slug' => Str::slug('Agile Software Development'),
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
        CategoryDetailModel::create([
            'category_id' => 2,
            'name' => 'Code Reengineering',
            'slug' => Str::slug('Code Reengineering'),
            'description' => "<p>" . implode("</p><p>", [
                $faker->paragraph(5),
                $faker->paragraph(5),
            ]) . "</p>",
        ]);
    }
}
