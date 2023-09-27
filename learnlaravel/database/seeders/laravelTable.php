<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class laravelTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'ronaldo',
        //     'email' => 'cr7@gmail.com',
        //     'dob' => '1986-09-12',
        //     'place' => 'portugal',
        // ]);
        User::factory(50)->create();

    }
}
