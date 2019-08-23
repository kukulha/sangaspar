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
        $related= Post::inRandomOrder()
            ->where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
        return view('web.post', compact('post', 'related'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)->orderBy('id' , 'DESC')->paginate();
        return view('web.posts', compact('posts'));
    }

    public function tag($slug)
   {
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::withAnyTag($slug)->get();
        return view('web.posts', compact('posts', 'categories'));
   }
}
