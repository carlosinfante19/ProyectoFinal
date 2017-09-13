<?php

namespace App\Http\Controllers;

use App\References;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request,[
            'priority' => 'required',
            'url'   => 'url',
            'image' => 'required'
        ]);
    
        $store    = $request->file('image')->store('public');
        $filename = substr($store, strpos($store, "/") + 1);
        
        References::create([
            'priority'  => $request->input('priority'),
            'url'       => $request->input('url'),
            'filename'  => $filename
        ]);
        
        return redirect()->route('references.index')
                         ->with('status', 'Reference Created Sucessfully');
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
    public function edit($id)
    {
        $references = References::findOrFail($id);
        return view('references.updateReferences', [ 'references' => $references ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $references = References::findOrFail($id);
        
        $this->validate($request,[
            'priority' => 'required',
            'url'   => 'url'
        ]);
        
        $references->update([
            'priority'  => $request->input('priority'),
            'url'       => $request->input('url')
        ]);

       return redirect()->route('references.index')->with('status', 'Services Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\References  $references
     * @return \Illuminate\Http\Response
     */
    public function destroy(References $references,$id)
    {
        $reference = References::find($id);
        $reference->delete();
        Storage::delete('/public/'.$reference->filename);        
        return redirect()->route('references.index')->with('status', 'Reference Deleted Sucessfully');
    }
}
