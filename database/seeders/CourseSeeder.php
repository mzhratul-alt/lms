<?php

namespace Database\Seeders;

use App\Models\Course\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course();
        $course->title = "Web Design";
        $course->price = "60000";
        $course->thumbnail = 'dummy.png';
        $course->teacher_id = 1;
        $course->save();
    }
}
