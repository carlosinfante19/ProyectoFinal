<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::All();
        return view('blog.blog', [ 'posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.createBlog');
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
            'title' => 'required',
            'content'   => 'required',
            'image' => 'required|image'
        ]);
    
        $store    = $request->file('image')->store('public');
        $filename = substr($store, strpos($store, "/") + 1);
        
        Blog::create([
            'title'  => $request->input('title'),
            'content'       => $request->input('content'),
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
    public function show($id)
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
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.updateBlog', [ 'blog' => $blog ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::findOrFail($id);
        
        $this->validate($request,[
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
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
     public function destroy($id)
     {
         $blog = Blog::find($id);
         $blog->delete();
         Storage::delete('/public/'.$blog->filename);        
         return redirect()->route('blog.index')->with('status', 'Post Deleted Sucessfully');
     }
}
