<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 8/26/2018
 * Time: 11:07 AM
 */

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TeamControler extends Controller
{
    public function createInFormation(Request $request)
    {

        $product = new Team();

        $product->access_address = $request->input('access_address');
        $product->team_name = $request->input('team_name');
        $product->place = $request->input('place');
        $product->Level = $request->input('Level');
        $product->Logo = $request->input('Logo');
        $product->team_photo = $request->input('team_photo');
        $product->age_from = $request->input('age_from');
        $product->to_age = $request->input('to_age');
        $product->about = $request->input('about');
        $product->user_founder = Session::get('id');

        $product->save();
    }

    public function information()
    {
        $data = Team::join('user', 'team_information.user_founder', '=', 'user.id')->get();
        return view('component.team_list.teamlist', ['data' => $data]);
    }
}