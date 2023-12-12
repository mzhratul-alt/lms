<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Teacher\Teacher;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    // Teacher Dependency Injection
    protected $teacherModel;


    public function __construct(Teacher $teacherModel)
    {
        $this->teacherModel = $teacherModel;
    }


    // Teacher Listing Page Method
    public function index()
    {
        $teachers = $this->teacherModel->all();
        return view('admin.teacher.teacher_list', compact('teachers'));
    }


    // Teacher Create Page Method
    public function create()
    {
        return view('admin.teacher.teacher_create');
    }


    // Teacher Store Method
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'profile' => 'required|mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('profile')) {
            $profile = str()->random(5) . time() . '.' . $request->profile->extension();
            $request->profile->storeAs('teachers', $profile, 'public');
        }

        $teacher = new $this->teacherModel;
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->profile = $profile;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->save();
        return back();
    }


    // Teacher Show Page Method
    public function show($id)
    {
    }


    // Teacher Edit Page Method
    public function edit($id)
    {
        $teacher = $this->teacherModel->findOrFail($id);
        return view('admin.teacher.teacher_edit', compact('teacher'));
    }


    // Teacher Update Method
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'profile' => 'nullable|mimes:png,jpg,jpeg',
            'previous_profile' => 'required',
        ]);
        if ($request->hasFile('profile')) {
            $profile = str()->random(5) . time() . '.' . $request->profile->extension();
            $request->profile->storeAs('teachers', $profile, 'public');
        } else {
            $profile = $request->previous_profile;
        }
        $teacher = $this->teacherModel->findOrFail($id);
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->profile = $profile;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->update();
        return back();
    }


    // Teacher Destroy Method
    public function destroy($id)
    {
        $this->teacherModel->findOrFail($id)->delete();
        return back();
    }


    // Teacher Status Change Method
    public function changeStatus(Request $request)
    {
    }


    //Teacher Store & Update Method
    protected function storeOrUpdate(Request $request, $id = null)
    {
        if ($id) {
            //Update Teacher
        } else {
            //Create Teacher
        }
    }
}
