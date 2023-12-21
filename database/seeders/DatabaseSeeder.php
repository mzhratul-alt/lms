<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course\Course;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            WardSeeder::class,
            PartSeeder::class,
            GenderSeeder::class,
            VoterSeeder::class,
        ]);
    }
}
