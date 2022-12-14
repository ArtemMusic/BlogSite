<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        // // $this -> authorize('view', auth()->user());
        // $posts = Post::paginate(6);
        // $randomPosts = Post::get()->random(4);
        // $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(4); //ASC
        // return view('main.index', compact('posts', 'randomPosts', 'likedPosts'));
        return redirect()->route('post.index');
    }
}
