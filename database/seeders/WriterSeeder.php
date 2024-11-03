<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer as WriterModel;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WriterModel::create([
            'name' => 'Prasetya Manullang M.Pd',
            'image' => 'img/1.jpg'
        ]);
        WriterModel::create([
            'name' => 'Yuliana Utami S.I.Kom',
            'image' => 'img/2.jpg'
        ]);
    }
}
