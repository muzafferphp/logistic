<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $usersData = [
            [
               'name'   =>'User',
               'email'  =>'user@gmail.com',
               'password' => Hash::make('12345678')
            ],
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}
