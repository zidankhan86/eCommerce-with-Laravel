<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            "name"=>"Admin",
            "email"=>"admin@gmail.com",
            "phone"=>"01712345678",
            "address"=>"Mirpur-1",
            "role"=>"admin",
            "password"=>'12345'
        
                    ]);
    }
}
