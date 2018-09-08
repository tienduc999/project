<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:53 PM
 */

namespace App\Http\Controllers;


use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function store(Request $request)
    {
        $product = new Price();

        $product->number_of_users = $request->input('number_of_users');
        $product->number_of_stadiums = $request->input('number_of_stadiums');
        $product->start_time = $request->input('start_time');
        $product->end_time = $request->input('end_time');
        $product->calendar = $request->input('calendar');
        $product->price = $request->input('price');
        $product->stadium_id = stadium_id;
        $product->save();

    }
}