<?php
/**
 * Created by PhpStorm.
 * User: zionhuang
 * Date: 17-10-31
 * Time: 下午7:25
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fixUserInfo(Request $request)
    {
        return view('userInfoFix');
    }

    public function change(Request $request)
    {
        $user = Auth::user();
        $params = $request->all();
        $user->name = $params['name'];
//        User::saving()
        $result = $user->save();
        return $user;
//        $result = $this->user->update($params);
//        return view('resultChange', $result);
    }

    public function test(Request $request)
    {
//        $data = $request->get('test');

        return view('test');
    }

}