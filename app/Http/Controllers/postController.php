<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class postController extends Controller
{

    public function index()
    {
        return view("blog.index")
            ->with("posts", Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blog.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5084',

        ]);
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . "-" . $slug . "." . $request->image->extension();
        $request->image->move(public_path("image"), $newImageName);

        Post::create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect("/blog");
    }

    public function show($slug){
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    public function edit($slug){
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5084',

        ]);
        $newImageName = uniqid() . "-" . $slug . "." . $request->image->extension();
        $request->image->move(public_path("image"), $newImageName);

        Post::where("slug",$slug)
        ->update([
            "title"=>$request->input('title'),
            "description"=>$request->input('description'),
            "slug"=>$slug,
            'image_path' => $newImageName,
            "title"=>$request->input('title'),
            'user_id' => auth()->user()->id
        ]);
         return redirect('/blog/'.$slug)->with("message","Post updated seccecefully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where("slug",$slug)
        ->delete();
         return redirect('/blog')->with("message","Post deleted seccecefully");
    }
}
