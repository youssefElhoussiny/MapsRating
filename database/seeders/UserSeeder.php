<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
       $user = new User();
       $user->name = "youssef";
       $user->email = "youssef@example.com";
       $user->password = "12345678";
       $user->save();

       $user = new User();
       $user->name = "mido";
       $user->email = "mido@example.com";
       $user->password = "12345678";
       $user->save();

       $user = new User();
       $user->name = "ahmed";
       $user->email = "ahmed@example.com";
       $user->password = "12345678";
       $user->save();
    }
}
