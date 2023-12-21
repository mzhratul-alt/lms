<?php

namespace Database\Seeders;

use App\Models\Voter\Part;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = [
            [
                "ward_id" => "1",
                "name" => "Part-1",
                "slug" => "part-1"
            ],
            [
                "ward_id" => "1",
                "name" => "Part-2",
                "slug" => "part-2"
            ],
            [
                "ward_id" => "1",
                "name" => "Part-3",
                "slug" => "part-3"
            ],
            [
                "ward_id" => "1",
                "name" => "Part-4",
                "slug" => "part-4"
            ],
            [
                "ward_id" => "1",
                "name" => "Part-5",
                "slug" => "part-5"
            ],
            [
                "ward_id" => "1",
                "name" => "Part-6",
                "slug" => "part-6"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-1",
                "slug" => "part-1"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-2",
                "slug" => "part-2"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-3",
                "slug" => "part-3"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-4",
                "slug" => "part-4"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-5",
                "slug" => "part-5"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-6",
                "slug" => "part-6"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-7",
                "slug" => "part-7"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-8",
                "slug" => "part-8"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-9",
                "slug" => "part-9"
            ],
            [
                "ward_id" => "2",
                "name" => "Part-10",
                "slug" => "part-10"
            ],
        ];
        Part::insert($parts);
    }
}
