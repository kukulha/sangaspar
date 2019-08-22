<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function blog()
    {
    	$categories = Category::orderBy('id', 'DESC')->paginate();
        $posts = Post::orderBy('id', 'DESC')->paginate();
        return view('web.posts', compact('posts', 'categories'));
    }

    public function post($slug)
    {
    	$post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }
}
