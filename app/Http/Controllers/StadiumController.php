<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/6/2018
 * Time: 9:34 PM
 */

namespace App\Http\Controllers;

use App\Stadium;
use Illuminate\Http\Request;


class StadiumController extends Controller
{
    public function store(Request $request)
    {
        $product = new Stadium();

        $product->id = $request->input('id');
        $product->name = $request->input('name');
        $product->manager_name = $request->input('imanager_name');
        $product->manager_phone = $request->input('manager_phone');
        $product->manager_email = $request->input('manager_email');
        $product->phone = $request->input('phone');
        $product->email = $request->input('email');
        $product->province_city = $request->input('province_city');
        $product->short_note = $request->input('short_note');
        $product->district = $request->input('district');
        $product->apartment_number = $request->input('apartment_number');
        $product->surface = $request->input('surface');
        $product->img = $request->input('img');
        $product->img = $request->input('about');
        $product->img = $request->input('user_id');

        $product->save();
    }

    public function update()
    {

    }

    public function edit()
    {

    }
}