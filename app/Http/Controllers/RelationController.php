<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\subject;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function many_to_many()
    {
        $stu = student::find(1);
        $sub = subject::all();
        return view('relation.many_to_many' , compact('stu' , 'sub'));
    }
    public function many_to_many_data(Request $request)
    {
        dd($request->all());
        // sync  => use array

    }
}
