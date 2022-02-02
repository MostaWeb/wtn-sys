<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'دانيه عقيل',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456'),
            'phone'=>'0123456789',
            'status'=>'متاح',
            'department_id'=>1
        ]);

        $user->attachRole('admin');

        Department::create([
            'name'=>'الموارد البشرية',
        ]);
    }
}
