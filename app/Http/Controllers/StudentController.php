<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->section = $request->section;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads/students', $image->getClientOriginalName());
            $student->image = $request->file('image')->getClientOriginalName();
        }
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->section = $request->section;
        if ($request->hasFile('image')) {
            $old_image = $student->image;
            unlink(public_path('uploads/students/'. $old_image));
            $image = $request->file('image');
            $image->move('uploads/students', $image->getClientOriginalName());
            $student->image = $request->file('image')->getClientOriginalName();
        }
        $student->update();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $old_image = $student->image;
        unlink(public_path('uploads/students/'. $old_image));
        $student->delete();
        return redirect()->route('students.index');
    }
}
