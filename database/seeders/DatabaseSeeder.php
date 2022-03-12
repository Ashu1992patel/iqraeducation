<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RolesTableSeeder::class,
            UserTableSeeder::class,
            SettingsSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
        ]);
    }
}
