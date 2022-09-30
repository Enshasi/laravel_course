<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Abd Yousef Enshasi';
        return view('site.index' , compact('name'));
    }

    public function about()
    {
        $data  = [
            [
                'name' => 'Abd Enshasi',
                "age" => '244',
            ],
            [
                'name' => 'Abood Enshasi',
                "age" => '22',
            ],
            [
                'name' => 'Ayman Enshasi',
                "age" => '2033',
            ],
        ];
        return view('site.about' , compact('data'));
    }

    public function contact()
    {
        return view('site.contact');
    }


    public function post()
    {
        return view('site.post');
    }




}

