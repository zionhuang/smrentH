<?php
/**
 * Created by PhpStorm.
 * User: zionhuang
 * Date: 17-10-31
 * Time: 下午7:30
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HouseRent;

class RentController extends Controller
{
    private $houseRent;

    public function __construct(HouseRent $houseRent)
    {
        $this->houseRent = $houseRent;
    }

    public function HouseSeek(Request $request)
    {
        $limit = $request->get('limit');
        $data = $this->houseRent::all()->take($limit);
        return $data->toJson();
    }

    public function rentWant(Request $request)
    {

    }

    public function addRentWant(Request $request)
    {

    }


}