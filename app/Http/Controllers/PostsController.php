<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::get();
        // $posts = Post::select('name' , "id")->get();
        // $posts = Post::where('id' , 3)->get();
        // $posts = Post::orderByDesc('id')->get();
        // $posts = Post::where('name' ,'abd' )->first();
        // $posts = Post::paginate(10);
        // 1 - 2 - 3
        // $posts = Post::Simplepaginate(10);   //next and previos
        $value = 10;
        if (request()->has('count')) {
            $value = request()->count;
        }
        if (request()->search) {
            $posts = Post::where('content', 'like', '%' . request()->search . '%')->paginate(10);
        } else {
            $posts = Post::paginate($value);
        }
        // dd($posts);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        //Uplode Image  in pc
        $image_name = rand() . time() . $request->file('cv')->getClientOriginalName();
        $request->file('cv')->move(public_path('uploads'), $image_name);

        Post::create([
            'name' => $request->name,
            'image' => $image_name,
            'content' => $request->content,

        ]);


        return redirect()->route('post.index')->with('msg', 'Success Create'); //with === sesstion


    }
    public function destroy($id)
    {
        $postss = Post::find($id);
        file::delete(public_path('uploads/' . $postss->image));
        $postss->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $posts = Post::find($id);

        return view('post.edit', compact('posts'));
    }
    public function update(Request $request, $id)
    {

        //Uplode Image  in pc

        $posts =  Post::find($id);
        $image_name = $posts->image;  //image old
        if ($request->hasFile('cv')) {
            $image_name = rand() . time() . $request->file('cv')->getClientOriginalName();
            $request->file('cv')->move(public_path('uploads'), $image_name);
        }

        $posts->update([
            'name' => $request->name,
            'image' => $image_name,
            'content' => $request->content,

        ]);
        return redirect()->route('posts.index')->with('msg', 'Edite Create'); //with === sesstion

    }
    public function show(){

    }
}
