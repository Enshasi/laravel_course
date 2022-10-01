<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMessageController extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new TestMail());
        return 'Done Send ';
    }
    public function contact_us()
    {
            return view('Forms.contact-us');
    }
    public function contact_us_data(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'message' =>'required',
        ]);


        $name_image = rand().time().$request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads/cv/') , $name_image);
        $data = $request->except('_token');
        $data['cv'] = $name_image ;

        Mail::to('Abd@asdsa')->send(new contact_us($data)) ;

    }
}
