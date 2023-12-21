<?php

namespace Database\Seeders;

use App\Models\Voter\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wards = [
            [
                "name" => "16 No.",
                "slug" => "16-no"
            ],
            [
                "name" => "17 No.",
                "slug" => "17-no"
            ]
        ];
        Ward::insert($wards);
    }
}
