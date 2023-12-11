<?php

namespace Database\Seeders;

use App\Models\Teacher\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher = new Teacher();
        $teacher->name = "Md. Zahid Hossain";
        $teacher->designation = "Dept. Head";
        $teacher->profile = "dummy.png";
        $teacher->save();
    }
}
