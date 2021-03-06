<?php

namespace App\Http\Controllers;

use App\Titles;
use Illuminate\Http\Request;
use App\Http\Requests;

class TitlesController extends Controller
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
        $titles = Titles::All();
        return view('title.titles', [ 'titles' => $titles ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Titles  $titles
     * @return \Illuminate\Http\Response
     */
    public function show(Titles $titles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titles  $titles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titles = Titles::findOrFail($id);
        return view('title.updateTitles', [ 'titles' => $titles ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titles  $titles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $titles = Titles::findOrFail($id);
        
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $titles->update([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'icon'    => $request->input('icon'),
        ]);

       return redirect()->route('titles.index')->with('status', 'Titles Updated Sucessfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titles  $titles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titles $titles)
    {
        //
    }
}
