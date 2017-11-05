<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function rentIndex(Request $request)
    {
//        $data = Post::where('post_type',1)->orderBy('updated_at','desc')->take(10)->get;
        $data = Post::all();
        return $data->toJson();
    }

    public function create(Request $request)
    {
        $data = $request->all();
        return Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => $data['user_id'],
        ]);
    }

    public function rentWant(Request $request)
    {

    }

    public function addRentWant(Request $request)
    {

    }
}
