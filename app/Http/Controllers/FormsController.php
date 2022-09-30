<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {

        return view('Forms.Form1');
    }
    function form1_data(Request $request){
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('age'));

        $name = $request->userName ;
        $age = $request->age ;
        return "Hi $name , My Age Is  $age";

    }
    public function form2()
    {
        return view('Forms.Form2');

    }
    public function form2_data(Request $request)
    {
        $name  = $request->userName;
        $email  = $request->email;
        $age  = $request->age;
        return view('Forms.Form2_data' , compact('name' , 'age' ,'email'));
    }
    public function form3()
    {
        return view('Forms.Form3');


    }
    public function form3_data(Request $request){
        $request->validate([
            'userName' =>'required',
            'email' =>'required',
            'password' =>'required',
            'confirm_password' =>'required',
        ]);

        dd($request->all());
    }
}
