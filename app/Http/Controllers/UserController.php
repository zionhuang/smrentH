<?php
/**
 * Created by PhpStorm.
 * User: zionhuang
 * Date: 17-10-31
 * Time: 下午7:25
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fixUserInfo(Request $request)
    {
        return "fixUserInfo";
    }



}