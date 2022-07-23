<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $adminData = [
            [
               'name'   =>'Admin',
               'email'  =>'admin@gmail.com',
               'password' => Hash::make('12345678')
            ],
        ];

        foreach ($adminData as $key => $val) {
            Admin::create($val);
        }
    }
}
