<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use Illuminate\Support\Facades\Auth;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $major = Major::all();
        return view('major.index', [
            'majors' => $major
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $major = new Major();
        $major->name = $request->name;
        $major->save();
        return redirect("major");
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
        $major = Major::find($id);
        if(!Auth::check()){
            return redirect('/login');
        }
        return view("major.edit", [
            'major' => $major
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $major = Major::find($id);
        $major->name = $request->name;
        $major->save();
        return redirect("/major");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $major = Major::find($id);
        if(!Auth::check()){
            return redirect("/login");
        }
        $major->delete();
        return redirect("/major");
    }
}