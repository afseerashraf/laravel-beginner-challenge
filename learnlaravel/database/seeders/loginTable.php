<?php

namespace Database\Seeders;

use App\Models\login;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class loginTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        login::create([
            'Email' => 'abc@gmail.com',
            'Password' => 'abc1234',
        ]);
    }
}
