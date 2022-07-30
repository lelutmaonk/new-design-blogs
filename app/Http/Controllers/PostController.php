<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $judul = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('name', request('author'));
            $judul = ' by ' . $author->name;
        }

        return view('user_templates.blogs', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            'test' => Category::all()
        ]);
    }

    public function detailPost(Post $post)
    {
        return view('user_templates.post', [
            'post' => $post,
            'test' => Category::all()
        ]);
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
