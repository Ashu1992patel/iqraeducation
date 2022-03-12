<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Guest',
            'Student',
            'Admin'
        ];

        foreach ($roles as $key => $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
