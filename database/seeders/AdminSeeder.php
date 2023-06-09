<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=new User();
        $admin->name = 'Admin';
        $admin->first_name = 'ahmad';
        $admin->last_name = 'yassin';
        $admin->gender ='meal';
        $admin->account_type='manger';
        $admin->email = 'admin@admin.com';
        $admin->photo = 'img';
        $admin->password = Hash::make('123456789');
        $admin->save();
        //php artisan db:seed --class=AdminSeeder
    }
}
