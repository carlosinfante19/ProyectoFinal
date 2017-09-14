<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::All();
        return view('blog.blog', [ 'blog' => $blog ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.createblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'priority' => 'required',
            'url'   => 'url',
            'image' => 'required|image'
        ]);
    
        $store    = $request->file('image')->store('public');
        $filename = substr($store, strpos($store, "/") + 1);
        
        blog::create([
            'priority'  => $request->input('priority'),
            'url'       => $request->input('url'),
            'filename'  => $filename
        ]);
        
        return redirect()->route('blog.index')
                         ->with('status', 'Reference Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog = blog::find($id);
        return view('blog.blogShow', [ 'blog' => $blog ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog = blog::findOrFail($id);
        return view('blog.updateblog', [ 'blog' => $blog ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog = blog::findOrFail($id);
        
        $this->validate($request,[
            'priority' => 'required',
            'url'   => 'url'
        ]);
        
        $blog->update([
            'priority'  => $request->input('priority'),
            'url'       => $request->input('url')
        ]);

       return redirect()->route('blog.index')->with('status', 'Services Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $reference = blog::find($id);
        $reference->delete();
        Storage::delete('/public/'.$reference->filename);        
        return redirect()->route('blog.index')->with('status', 'Reference Deleted Sucessfully');
    }
}
