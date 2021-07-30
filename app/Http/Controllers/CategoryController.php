<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Kategori işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        return view("category.index");
    }

    public function edit(Request $request)
    {
        return view("category.edit");
    }
    public function add(Request $request)
    {
        $catname = $request->catname;
        $viewdata_=[
            "catname" => $catname,
        ];

        return view("cart.edit",compact("viewdata_"));
    }
}
