<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'=>"admin",
            'email'=>"admin@lgb.com",
            'password'=>"admin1234@",
            'roles'=>"admin",
            'phone'=>"03459242192",
            // 'whatsapp'=>"03459242192",
            // 'image'=>"admin",
            'address'=>"admin",
        ]);
    }
}
