<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::truncate();
        Admin::truncate();
        User::create([
            'name'=>'user',
            'email'=>'user@user.com',
            'password'=>Hash::make('123456789'),
        ]);
        Admin::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456789'),
        ]);
    }
}
