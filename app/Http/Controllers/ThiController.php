<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/9/2018
 * Time: 9:08 PM
 */

namespace App\Http\Controllers;
use App\Post;
use App\User;

class ThiController extends Controller
{
   public function thi(){
       $thongtin=Post::find(4);
       dd($thongtin->user);
       dd($thongtin);
   }
    public function user(){
        $thongtin=User::find(1);
        dd($thongtin->post);
        dd($thongtin);
    }
}