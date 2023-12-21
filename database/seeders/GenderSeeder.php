<?php

namespace Database\Seeders;

use App\Models\Voter\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                "type" => "Male",
                "slug" => "male"
            ],
            [
                "type" => "Female",
                "slug" => "female"
            ]
        ];
        Gender::insert($genders);
    }
}
