<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Models\Teacher\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course\Enrollment;
use App\Models\Student\Student;

class FrontendController extends Controller
{
    //Home Page
    public function home()
    {
        $courses = Course::latest()->take(3)->get();
        $teachers = Teacher::latest()->take(4)->get();
        return view('frontend.home', compact('courses', 'teachers'));
    }

    public function courses()
    {
        $courses = Course::all();
        return view('frontend.course', compact('courses'));
    }

    public function courseShow($id)
    {
        $course = Course::findOrFail($id);
        return view('frontend.course_show', compact('course'));
    }

    public function courseEnrollment(Request $request, $id)
    {
        $request->validate([
            "payment_method" => "required",
            "phone_number" => "required",
            "txn_id" => "required"
        ]);

        $previousEnrollment = Enrollment::where('course_id', $id)
            ->where('student_id', auth()->guard('student')->id())->count();

        if ($previousEnrollment < 0) {
            $enrollment = new Enrollment();
            $enrollment->course_id = $id;
            $enrollment->student_id = auth()->guard('student')->id();
            $enrollment->payment_method = $request->payment_method;
            $enrollment->phone_number = $request->phone_number;
            $enrollment->txn_id = $request->txn_id;
            $enrollment->save();
            return back();
        }else{
            return back()->with('error', 'Already enroll to the course.');
        }
    }

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('frontend.teacher', compact('teachers'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.about');
    }
}
