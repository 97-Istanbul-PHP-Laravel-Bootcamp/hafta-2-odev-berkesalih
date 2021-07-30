<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Satış işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
 * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        return view("cart.index");
    }

    public function edit(Request $request)
    {
        return view("cart.edit");
    }

    public function add(Request $request)
    {
        $username = $request->uname;
        $catname = $request->catname;
        $features = $request->features;
        $brand = $request->brand;
        $st_name = $request->st_name;
        $viewdata_ = [
            "pname" => $username,
            "catname" => $catname,
            "features" => $features,
            "brand" => $brand,
            "st_name" => $st_name
        ];

        return view("cart.edit", compact("viewdata_"));
    }
}
