<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use App\Models\Course\Enrollment;
use App\Models\Student\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //Index Page
    public function index()
    {
        $enrollments = Enrollment::latest()
            ->with('course:id,title')
            ->with('student:id,name')
            ->get();
        return view('admin.enrollment.enrollment_list', compact('enrollments'));
    }

    public function changeApproval(Request $request)
    {
        $enrollment = Enrollment::findOrFail($request->enrollment_id);
        if ($enrollment->is_approved) {
            $enrollment->is_approved = false;
            $enrollment->save();
            return 'false';
        } else {
            $enrollment->is_approved = true;
            $enrollment->save();
            return 'true';
        }
    }
}
