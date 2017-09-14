<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PostController extends Controller
{
    public function index()
    {
        $posts = Blog::All();
        return view('/blog', [ 'posts' => $posts ]);
    }
}
