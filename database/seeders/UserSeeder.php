<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'=>'Daniah',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456'),
            'phone'=>'0123456789',
            'status'=>'متاح'
        ]);

        $user->attachRole('admin');
    }
}
