<?php

namespace App\Http\Controllers;

use App\References;
use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = References::All();
        return view('references.references', [ 'references' => $references ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.createReferences');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = uniqid();
        $this->validate($request,[
            'priority' => 'required|unique:references',
            'url'   => 'url',
            'image' => 'required'
        ]);
    
        $store = $request->file('image')->store('references');
        
        References::create([
            'priority'  => $request->input('priority'),
            'url'       => $request->input('url'),
            'filename'  => $store
        ]);
        
        return redirect()->route('services.index')
                         ->with('status', 'Services Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $references = References::find($id);
        return view('references.referencesShow', [ 'references' => $references ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function edit(References $references)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, References $references)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function destroy(References $references)
    {
        //
    }
}
