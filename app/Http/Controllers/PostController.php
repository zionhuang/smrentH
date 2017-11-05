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
        $data = Post::where('post_type',0)->orderBy('updated_at','desc')->take(10)->get();
        $paramsArr = array();
        foreach ($data as $post) {
            $para = [
                'pid' => $post->pid,
                'title' => $post->title,
                ];
            array_push($paramsArr,$para) ;
        }
//        dd($paramsArr);
        return view('rent', ['data' => $paramsArr]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
//        dd($data);
        return Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => $data['user_id'],
            'post_type' => $data['post_type'],
        ]);
    }

    public function rentWant(Request $request)
    {

    }

    public function addRentWant(Request $request)
    {

    }
}
