<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Http\Requests;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::All();
        return view('services.services', [ 'services' => $services ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.createServices');
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
        
        Services::create([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'icon'    => $request->input('icon')
        ]);

        return redirect()->route('services.index')->with('status', 'Services Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Services::find($id);
        return view('services.serviceShow', [ 'services' => $services ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Services::findOrFail($id);
        return view('services.updateServices', [ 'services' => $services ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = Services::findOrFail($id);
        
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $services->update([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'icon'    => $request->input('icon'),
        ]);

       return redirect()->route('services.index')->with('status', 'Services Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
