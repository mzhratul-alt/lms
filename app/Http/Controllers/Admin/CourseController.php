<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Http\Controllers\Controller;
use App\Models\Teacher\Teacher;

class CourseController extends Controller
{
    // Course Dependency Injection
    protected $courseModel;
    protected $teacherModel;


    public function __construct(Course $courseModel, Teacher $teacherModel)
    {
        $this->courseModel = $courseModel;
        $this->teacherModel = $teacherModel;
    }


    // Course Listing Page Method
    public function index()
    {
        $courses = $this->courseModel->with('teacher')->get();
        return view('admin.course.course_list', compact('courses'));
    }


    // Course Create Page Method
    public function create()
    {
        $teachers = $this->teacherModel->select(['id', 'name'])->get();
        return view('admin.course.course_create', compact('teachers'));
    }


    // Course Store Method
    public function store(Request $request)
    {
        $request->validate([
            "title" => 'required|string',
            "price" => 'required|string',
            "thumbnail" => 'required|mimes:png,jpg,jpeg',
            "teacher_id" => 'required|exists:teachers,id',
        ]);
        if ($request->hasFile('thumbnail')) {
            $thumbnail = str()->random(5) . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->storeAs('courses', $thumbnail, 'public');
        }
        $course = new $this->courseModel;
        $course->title = $request->title;
        $course->price = $request->price;
        $course->thumbnail = $thumbnail;
        $course->teacher_id = $request->teacher_id;
        $course->save();
        return back();
    }


    // Course Show Page Method
    public function show($id)
    {
    }


    // Course Edit Page Method
    public function edit($id)
    {
        $course = $this->courseModel->findOrFail($id);
        $teachers = $this->teacherModel->select(['id', 'name'])->get();
        return view('admin.course.course_edit', compact('course', 'teachers'));
    }


    // Course Update Method
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => 'required|string',
            "price" => 'required|string',
            "thumbnail" => 'nullable|mimes:png,jpg,jpeg',
            "teacher_id" => 'required|exists:teachers,id',
        ]);
        if ($request->hasFile('thumbnail')) {
            $thumbnail = str()->random(5) . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->storeAs('courses', $thumbnail, 'public');
        } else {
            $thumbnail = $request->previous_thumbnail;
        }
        $course = $this->courseModel->findOrFail($id);
        $course->title = $request->title;
        $course->price = $request->price;
        $course->thumbnail = $thumbnail;
        $course->teacher_id = $request->teacher_id;
        $course->save();
        return back();
    }


    // Course Destroy Method
    public function destroy($id)
    {
        $this->courseModel->findOrFail($id)->delete();
        return back();
    }


    // Course Status Change Method
    public function changeStatus(Request $request)
    {
    }


    //Course Store & Update Method
    protected function storeOrUpdate(Request $request, $id = null)
    {
        if ($id) {
            //Update Course
        } else {
            //Create Course
        }
    }
}
