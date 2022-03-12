<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Deeniyat',
            'Language',
            'Foundation',
            'Preparation',
        ];

        foreach ($names as $key => $name) {
            $faker = Faker\Factory::create();

            $category = Category::create([
                'name' => $name,
                'description' => $faker->paragraph(2, true),
            ]);

            $category->files()->create([
                'path' => 'frontend/images/categories/' . $category->name . '.jpg',
            ]);
        }
    }
}
