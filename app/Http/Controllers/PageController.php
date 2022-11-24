<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // Consulta a base de datos
        //$posts = Post::get();
        //$post = Post::first();
        //$post = Post::find(24);
        //dd($posts);
        //dd($post);

        $posts = Post::latest()->paginate();

        // To view records on pagination (only 15)
        //dd($posts);

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        // Return data using array:
        //return view('post', ['post' => $post]);

        // Return data using ORM (objects)
        return view('post', ['post' => $post]);
    }
}
