<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::get();

        foreach ($roles as $key => $role) {
            User::create([
                'name' => $role->name,
                'dob' => Carbon::today(),
                'gender' => 'male',
                'contact' => '9981435702',
                'address' => "India",
                'course_id' => 1,
                'email' => $role->slug . '@iqraeducations.com',
                'password' => Hash::make('Password@123'),
                'role_id' => $role->id,
            ]);
        }
    }
}
