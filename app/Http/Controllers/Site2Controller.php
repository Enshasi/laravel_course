<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        return view('site2.index');
    }


    public function experienc()
    {
        return view('site2.experienc');
    }

    public function eduction()
    {
        return view('site2.eduction');
    }

    public function skills()
    {
        return view('site2.skill');
    }

    public function interst()
    {
        return view('site2.interst');
    }


    public function awards()
    {
        $awards = [
            'spacefication one 1',
            'spacefication tow 2',
            'spacefication Three 3',
            'spacefication For 4',
            'spacefication Five 5',
        ];
        return view('site2.award' , compact('awards'));
    }






}
