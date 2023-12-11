<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Course\Course;
use App\Models\Student\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Student Register Page Method
    public function register()
    {
        return view('student.auth.student_register');
    }
    //Student Store Method
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "phone" => "required",
            "email" => "required|email",
            "password" => "required|min:8",
            "profile" => "nullable",
        ]);

        if ($request->hasFile('profile')) {
            $profile = str()->random(5) . time() . '.' . $request->profile->extension();
            $request->profile->storeAs('students', $profile, 'public');
        }

        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->profile = $profile ?? null;
        $student->save();
        return redirect()->route('student.login');
    }
    //Student Login Page Method
    public function login()
    {
        return view('student.auth.student_login');
    }
    //Student Authentication Method
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:students,email",
            'password' => "required|min:8",
            'remember' => 'nullable|string'
        ]);
        $remember = $request->remember == "on" ? true : false;

        if (Auth::guard('student')->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $remember
        )) {
            $request->session()->regenerate();
            return redirect()->route('student.dashboard');
        }
        return redirect()->route('student.login')->with('error', 'Invalid credentials');
    }

    //Student Logout Method
    public function logout(Request $request)
    {
        Auth::guard("student")->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('student.login');
    }
    //Student Forgot Password Page
    public function forgot_password()
    {
        return view('student.auth.student_forgot_password');
    }
}
