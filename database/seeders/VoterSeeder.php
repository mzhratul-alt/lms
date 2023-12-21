<?php

namespace Database\Seeders;

use App\Models\Voter\Voter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voters = [
            [
                "ward_id" => 1,
                "part_id" => 1,
                "gender_id" => 2,
                "name" => "রাফাত আরা আহমেদ",
                "voter_number" => "১৫০৪০৪০০২১১৭",
                "father_name" => "আহমেদ আলী",
                "mother_name" => "আনোয়ারা আহম্মেদ",
                "occupation" => "ছাত্র/ছাত্রী",
                "dob" => "1996-05-15",
                "address" => "১০২, খাজা মঞ্জিল, পাঁচলাইশ আ/এ, চকবাজার, পাঁচলাইশ, চট্টগ্রাম।",
            ]
        ];
        Voter::insert($voters);
    }
}
