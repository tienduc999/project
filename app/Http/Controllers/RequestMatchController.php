<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:55 PM
 */

namespace App\Http\Controllers;

use App\RequestMatch;
use Illuminate\Http\Request;

;

class RequestMatchController extends Controller
{
    public function store(Request $request)
    {
        $product = new RequestMatch();
    }
}