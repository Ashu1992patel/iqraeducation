<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'Nazira',
            'Urdu Language',
            'Arabic Grammer',
            'Hifz-e-Quran',
            'Qirat',
            'Darsh-e-Nizami',
            'Janazah Management',
            'Mufti',
            'Aqaid',
            'Taharat',
            'Hadees',
            'Tafsheer',
            'Daura-e-Hifz',
        ];
        
        $period = [
            '12 Months',
            '12 Months',
            '12 Months',
            '2 Years',
            '2 Years',
            '6 Years',
            '1 Month',
            '2 Years',
            '1 Month',
            '3 Months',
            '4 Months',
            '4 Months',
            '8 Months',
        ];

        $duration = [
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '120 Minutes/Day',
            '30 Minutes/Day',
            '120 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
            '60 Minutes/Day',
        ];
        
        $path = [
            'frontend/images/courses/nazira.jpg',
            'frontend/images/courses/urdu-language.jpg',
            'frontend/images/courses/arabic-grammer.jpg',
            'frontend/images/courses/hifz-e-quran.jpg',
            'frontend/images/courses/qirat.jpg',
            'frontend/images/courses/darsh-e-nizami.jpg',
            'frontend/images/courses/janazah-management.jpg',
            'frontend/images/courses/mufti.jpg',
            'frontend/images/courses/aqaid.jpg',
            'frontend/images/courses/taharat.jpg',
            'frontend/images/courses/hadees.jpg',
            'frontend/images/courses/tafsheer.jpg',
            'frontend/images/courses/daura-e-hifz.png',
        ];

        $categories = [1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

        foreach ($courses as $key => $course) {
            $faker = Faker\Factory::create();

            $course = Course::create([
                'name' => $course,
                'description' => $faker->paragraph(5, true),
                'category_id' => $categories[$key],
                'period' => $period[$key],
                'duration' => $duration[$key],
                'price' => 500,
                'teacher' => 'NA',
            ]);
            $course->files()->create([
                'path' => $path[$key],
            ]);
        }
    }
}
