<?php

namespace App;

use App\Http\Requests\SetPostRequest;
use Carbon\Carbon;
use Hamcrest\Core\Set;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $guarded = [];

    public function getPosts()
    {
        return Post::orderBy('publication_date','desc')->get();
    }

    public function getMyPosts()
    {
        return Post::where('user_id',Auth::user()->id)
            ->orderBy('publication_date','desc')
            ->get();
    }

    public function createPost(SetPostRequest $request)
    {
        Post::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'publication_date' => Carbon::now(),
            'user_id' => Auth::user()->id
        ]);

        return redirect(url('/home'));
    }
}
