<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>1,
            'profile_image'=>(''),
            'contact_number'=>'09918895966',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Claire Nakila',
            'email' => 'clairenakila@gmail.com',
            'password' => bcrypt('clairenakila'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918875967',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Elsie Jane Petogo',
            'email' => 'elsiejane@gmail.com',
            'password' => bcrypt('elsiejane'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918875968',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Jikie Ybanez',
            'email' => 'jikieybanez@gmail.com',
            'password' => bcrypt('jikieybanez'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918875969',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Cristine Casilas',
            'email' => 'cristinecasilas@gmail.com',
            'password' => bcrypt('cristinecasilas'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918875958',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Sunshine Galleto',
            'email' => 'sunshinegalleto@gmail.com',
            'password' => bcrypt('sunshinegalleto'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918870968',
            'is_frequent_shopper'=>0,

        ]);
        User::create([
            'name' => 'Merrey Joy Ocon',
            'email' => 'merreyjoyocon@gmail.com',
            'password' => bcrypt('merreyjoyocon'), 
            //'role_id' => 2, // Set the role_id explicitly
            'is_admin'=>0,
            'profile_image'=>(''),
            'contact_number'=>'09918870968',
            'is_frequent_shopper'=>0,

        ]);
    }
}
