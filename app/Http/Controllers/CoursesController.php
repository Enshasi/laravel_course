<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class coursesController extends Controller
{
    public function index()
    {

        $value = 10;
        if (request()->has('count')) {
            $value = request()->count;
        }
        if (request()->search) {
            $courses = course::where('content', 'like', '%' . request()->search . '%')->paginate(10);
        } else {
            $courses = course::paginate($value);
        }
        // dd($courses);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {


        course::create([
            'name' => $request->name,
            'content' => $request->content,

        ]);


        return redirect()->route('courses.index')->with('msg', 'Success Create'); //with === sesstion


    }
    public function destroy($id)
    {

        course::destroy($id);
        return redirect()->back();
    }
    public function edit($id)
    {
        $courses = course::find($id);

        return view('courses.edit', compact('courses'));
    }
    public function update(Request $request, $id)
    {

        //Uplode Image  in pc

        $courses =  course::find($id);

        $courses->update([
            'name' => $request->name,
            'content' => $request->content,

        ]);
        return redirect()->route('courses.index')->with('msg', 'Edite Create'); //with === sesstion

    }
    public function show(){

    }
}
