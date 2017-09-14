<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Page;

class PostController extends Controller
{
    public function index()
    {
        $posts = Blog::All();
        return view('/blog', [ 'posts' => $posts ]);
    }
    
    public function page()
    {
        $page = Page::find(1);
        return view('/page', [ 'page' => $page ]);
    }
}
