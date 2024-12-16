<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classes = Classes::all();
        return view('class.index',[
            'classes' => $classes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        if (!Auth::check()) {
            return redirect('/login');
        }
        return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $class = new Classes();
        $class->name = $request->name; 
        $class->capacity=$request->capacity;
        $class->save();
        return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $classes = Classes::find($id);
        return view('class.show', [
            'classes' => $classes
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $class = Classes::find($id);
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('class.edit', [
            'class'=>$class,
        ]);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $class=Classes::find($id);
        $class->name = $request->name;
        $class->capacity = $request->capacity;
        $class->save();
        return redirect('/class');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $class = Classes::find($id);
        if(!Auth::check()){
            return redirect('/login');
        }
        $class->delete();
        return redirect('class');
    }
}