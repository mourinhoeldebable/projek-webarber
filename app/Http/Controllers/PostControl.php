<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControl extends Controller
{
    public  function index()
    {
        return view('info',[
            "title" => "About Us",
            "posts" => Post::all()
        ]);
    }
    public  function indexs()
    {
        return view('pesan',[
            "title" => "Order Now!",
            "posts" => Post::all()
        ]);
    }
}