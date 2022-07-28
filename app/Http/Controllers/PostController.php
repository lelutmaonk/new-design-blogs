<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('user_templates.blogs', [
            'posts' => Post::latest()->paginate(7)
        ]);
    }
}
