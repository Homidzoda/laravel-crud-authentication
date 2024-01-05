<?php

// app/Http/Controllers/Admin/TeacherController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers,email',
            'password' => 'required|min:6|confirmed',
        ]);

        Teacher::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'password' => bcrypt($request->input('password')),
        ]);

        Session::flash('success', 'Teacher created successfully');

        return redirect()->route('teacher.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {

        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'subject' => 'required',
            'password' => 'required',
        ]);

        $teacher->name = $request->input('name');
        $teacher->subject = $request->input('subject');
        $teacher->email = $request->input('email');
        $teacher->password = $request->input('password');



        $teacher->save();

        Session::flash('success', 'Teacher updated successfully');

        return redirect()->route('teacher.index');
    }
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        // Дополнительные действия, если нужно

        Session::flash('success', 'Teacher deleted successfully');

        return redirect()->route('teacher.index');
    }

}





