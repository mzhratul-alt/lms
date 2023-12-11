<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashoboard Page
    public function index()
    {
        $courses = Course::with('teacher:id,name')
            ->with('enrollments:id,course_id,result')
            ->whereHas('enrollments', function ($query) {
                $query->where('student_id', auth()->guard('student')->id())
                    ->where('is_approved', true);
            })->get();
        return view('student.dashboard', compact('courses'));
    }
}
