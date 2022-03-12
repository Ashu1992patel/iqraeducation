<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = [
            'Address',
            'Primary Contact',
            'Secondary Contact',
            'Email',
            'Description',
            'History',
            'Primary Mission',
            'Secondary Mission',
            'Vision',
            'Primary Logo',
            'Secondary Logo',
            'Favorite Icon',
        ];

        $slugs = [
            'address',
            'primary_contact',
            'secondary_contact',
            'email',
            'description',
            'history',
            'mission_primary',
            'mission_secondary',
            'vision',
            'primary_logo',
            'secondary_logo',
            'favicon',
        ];

        $values = [
            'Maulana Ward No. 7, Panchampura, Near Madar Gate, Katangi, Jabalpur, MP',
            '‎+91-8109223848',
            '‎+91-8109223849',
            'info@iqraeducations.com',
            'Iqra Islamic Education Centre is to reform our offsprings with the islamic culture along with professional education. We are coming with various education which includes The Quran, Urdu, Arbi, Hindi, English, Maths, Chemistry, Phisics Biology, 10th and 12th. Students can choose their respective subject and join our batches.',
            'Iqra Islamic Education Centre is to reform our offsprings with the islamic culture along with professional education. We are coming with various education which includes The Quran, Urdu, Arbi, Hindi, English, Maths, Chemistry, Phisics Biology, 10th and 12th. Students can choose their respective subject and join our batches.',
            'Iqra Islamic Education Centre is to reform our offsprings with the islamic culture along with professional education. We are coming with various education which includes The Quran, Urdu, Arbi, Hindi, English, Maths, Chemistry, Phisics Biology, 10th and 12th. Students can choose their respective subject and join our batches.',
            'Iqra Islamic Education Centre is to reform our offsprings with the islamic culture along with professional education. We are coming with various education which includes The Quran, Urdu, Arbi, Hindi, English, Maths, Chemistry, Phisics Biology, 10th and 12th. Students can choose their respective subject and join our batches.',
            'Iqra Islamic Education Centre is to reform our offsprings with the islamic culture along with professional education. We are coming with various education which includes The Quran, Urdu, Arbi, Hindi, English, Maths, Chemistry, Phisics Biology, 10th and 12th. Students can choose their respective subject and join our batches.',
            '/frontend/images/iqra/logo.png',
            '/frontend/images/iqra/logo33.png',
            '/frontend/images/iqra/favicon01.ico',
        ];

        $file_paths = [
            null,
            null,
            null,
            null,
            null,
            'frontend/images/about/1.jpg',
            'frontend/images/about/2.jpg',
            'frontend/images/about/3.jpg',
            'frontend/images/about/4.jpg',
            null,
            null,
            null,
        ];

        foreach ($names as $key => $name) {
            $setting = Setting::create([
                'name' => $name,
                'slug' => $slugs[$key],
                'value' => $values[$key]
            ]);

            if (!is_null($file_paths[$key])) {
                $setting->file()->create([
                    'path' => $file_paths[$key],
                ]);
            }
        }
    }
}