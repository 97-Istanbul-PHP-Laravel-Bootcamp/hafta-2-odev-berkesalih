<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Ürün işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        return view("product.index");
    }

    public function edit(Request $request)
    {
        return view("product.edit");
    }
    public function add(Request $request)
    {
        $pname = $request->pname;
        $catname = $request->catname;
        $features = $request->features;
        $brand = $request->brand;
        $st_name = $request->st_name;
        $mail = $request->email;
        $viewdata_=[
            "pname" => $pname,
            "catname" => $catname,
            "features" => $features,
            "brand" => $brand,
            "st_name" => $st_name
        ];

        return view("product.edit",compact("viewdata_"));
    }
}
