<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Carrier;

class CarriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrierData = [
            [
               'name'   =>'Carrier',
               'email'  =>'carrier@gmail.com',
               'password' => Hash::make('12345678')
            ],
        ];

        foreach ($carrierData as $key => $val) {
            Carrier::create($val);
        }
    }
}
