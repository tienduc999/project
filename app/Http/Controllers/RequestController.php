<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:55 PM
 */

namespace App\Http\Controllers;

use App\Request1;
use Illuminate\Http\Request;

;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $product = new Request();
    }
}