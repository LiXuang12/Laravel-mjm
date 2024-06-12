<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserMjm;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // UserMjm::create([
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('jembut'),
        // ]);
        
    }

    public function down(): void
    {
        Schema::dropIfExists('UserMjm');
    }
}
