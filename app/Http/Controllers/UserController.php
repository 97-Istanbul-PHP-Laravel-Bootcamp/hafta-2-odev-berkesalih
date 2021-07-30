<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
 * <summary>
 * Bu kod bloğunda Kullanıcı işlemlerinin route yönlendirilmeleri gerçekleştirildi ve routelardan gelen post
     * işlemlerinden gelen verilerin alınması sağlandı.
 * </summary>
 *  */
    public function index()
    {
        return view("user.index");
    }

    public function add(Request $request)
    {
        $name = $request->fname;
        $surname = $request->lname;
        $city = $request->city;
        $country = $request->country;
        $company = $request->company;
        $mail = $request->email;
        $check = $request->remember ? 1 : 0;
        $viewdata_=[
            "name" => $name,
            "surname" => $surname,
            "city" => $city,
            "country" => $country,
            "company" => $company,
            "mail" => $mail,
            "check" => $check
        ];

        return view("user.edit",compact("viewdata_"));
    }

    public function edit()
    {
        return view("user.edit");
    }
}
