<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $page = Page::find(1);
        return view('page.page', [ 'page' => $page ]);
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('page.updatePage', [ 'page' => $page ]);
    }

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
}
