<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetPostRequest;
use App\Post;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts = new Post();
        return view('showPosts')->with('posts', $posts->getPosts());
    }

    public function getMyPosts()
    {
        $posts = new Post();
        return view('showPosts')->with('posts', $posts->getMyPosts());
    }

    public function createPost(SetPostRequest $request)
    {
        $post = new Post();
        $post->createPost($request);
    }

}
