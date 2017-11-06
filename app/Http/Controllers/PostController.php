<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mockery\Exception;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function houseIndex(Request $request)
    {
        $type = $request->get('type');
        if (is_null($type)) {
            return "缺少type参数";
        }
        $data = Post::where('post_type',$type)->orderBy('updated_at','desc')->take(10)->get();
        $paramsArr = array();
        foreach ($data as $post) {
            $para = [
//                'type' => $type ? '求租' : '出租',
                'pid' => $post->pid,
                'title' => $post->title,
                ];
            array_push($paramsArr,$para) ;
        }
        return view('house', ['type' => $type ? '出租' : '求租','data' => $paramsArr]);
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

    public function post(Request $request)
    {
        return view('post');
    }
}
