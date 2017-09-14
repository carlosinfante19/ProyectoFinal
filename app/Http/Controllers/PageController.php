<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = page::All();
        return view('page.page', [ 'page' => $page ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.createpage');
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
            'content' => 'required',
        ]);
        
        page::create([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'icon'    => $request->input('icon')
        ]);

        return redirect()->route('page.index')->with('status', 'page Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = page::find($id);
        return view('page.pageShow', [ 'page' => $page ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = page::findOrFail($id);
        return view('page.updatepage', [ 'page' => $page ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = page::findOrFail($id);
        
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $page->update([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'icon'    => $request->input('icon'),
        ]);

       return redirect()->route('page.index')->with('status', 'page Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = page::find($id);
        $page->delete();

        // redirect
        return redirect()->route('page.index')->with('status', 'page Deleted Sucessfully');
    }
}
