<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Student\Student;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // Student Dependency Injection
    protected $studentModel;


    public function __construct(Student $studentModel)
    {
        $this->studentModel = $studentModel;
    }


    // Student Listing Page Method
    public function index()
    {
        $students = $this->studentModel->all();
        return view('admin.student.student_list', compact('students'));
    }


    // Student Destroy Method
    public function destroy($id)
    {
        $this->studentModel->findOrFail($id)->delete();
        return back();
    }


    // Student Status Change Method
    public function changeStatus(Request $request)
    {
    }


    //Student Store & Update Method
    protected function storeOrUpdate(Request $request, $id = null)
    {
        if ($id) {
            //Update Student
        } else {
            //Create Student
        }
    }
}
