<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Major;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors = Major::all();
        $courses = Course::all();
        return view('course.index',[
            'courses' => $courses,
            'majors' => $majors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $majors = Major::all();
        if (!Auth::check()) {
        return redirect('/login');
        }
        return view('course.create', [
            'majors' => $majors
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $course = new Course();
        $course->name = $request->name;
        $course->majors_id = $request->majors_id;
        $course->save();
        $course->students()->attach($request->students);
        return redirect("courses");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $majors = Major::all();
        $course = Course::find($id);
        if (!Auth::check()) {
            return redirect('/login');
            }
        return view('course.edit',[
            'courses' => $course,
            'majors' => $majors
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $course =Course::find($id);
        $course->name = $request->name;
        $course->majors_id = $request->majors_id;
        $course->students()->sync($request->students);
        $course->save();
        return redirect("/courses");

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course = Course:: find($id);
        if (!Auth::check()) {
            return redirect('/login');
            }
        $course->delete();
        return redirect("/courses");

    }
}