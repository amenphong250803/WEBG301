<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Time;
use App\Models\Classroom;
use App\Models\Classes;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $times = Time::all();
        $classrooms = Classroom::all();
        $schedules = Schedule::all();
        $classes = Classes::all();
        return view('schedule.index',[
            'schedules' => $schedules,
            'classrooms' => $classrooms,
            'times' => $times,
            'classes' => $classes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (!Auth::check()) {
        return redirect('/login');
        }
        $times = Time::all();
        $classrooms = Classroom::all();
        $classes = Classes::all();
        $courses = Course::all();
        return view('schedule.create',[
            'times' => $times,
            'classrooms' => $classrooms,
            'classes' => $classes,
            'courses' => $courses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $schedules = new Schedule();
        $schedules->dayOfWeek = $request->dayOfWeek;
        $schedules->course_id = $request->course_id;
        $schedules->save();
        $schedules->times()->attach($request->times);
        $schedules->classrooms()->attach($request->classrooms);
        $schedules->classes()->attach($request->classes);
        return redirect('schedules');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (!Auth::check()) {
        return redirect('/login');
        }
        $schedules = Schedule::find($id);
        $schedules->delete();
        return redirect('schedules');
    }
}