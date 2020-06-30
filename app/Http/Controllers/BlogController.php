<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index',compact('blogs'));
    }
    
    public function create()
    {
        return view('blogs.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);   
        $blog = Blog::create(['title' => $request->title,'description' => $request->description]);
        return redirect('/blog/'.$blog->id);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);   
        $blog = Blog::where('id',$request->id)->update(['title' => $request->title,'description' => $request->description]);
        return redirect('/blog/'.$request->id);
    }

    public function show(Request $request )
    {
       $blog = Blog :: findOrFail($request->id);
        return view('blogs.show',compact('blog'));
    }
    
    public function edit(Request $request )
    {
        $blog = Blog :: findOrFail($request->id);
        return view('blogs.edit',compact('blog'));
    }
    
    public function destroy(Request $request , Blog $blog)
    {
        $blog = Blog::find($request->id);
        $blog->delete();
        return redirect('/');
    }
}
