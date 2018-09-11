<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function post(Request $request)
    { $error = $this->validate($request, [
        'time' => 'required',
        'stadium' => 'required',
        'address' => 'required',
        'level' => 'required',
        'match' => 'required',
        'note' => 'required',
    ], [
        'time.required' => 'thời ko được để rỗng',
        'stadium.required' => 'địa chỉ sân không được để rỗng',
        'address.required' => 'địa không được để rỗng',
        'level.required' => 'trình độ không đc để rỗng',
        'match.required' => 'kèo ko đc để rỗng',
        'note.required' => 'gi chú không đc để rỗng'
    ]);
        $product = new Post();
        $user_id=Session::get('id');

        $product->time = $request->input('time');
        $product->stadium = $request->input('stadium');
        $product->address = $request->input('address');
        $product->level = $request->input('level');
        $product->match = $request->input('match');
        $product->status = '123';
        $product->note = $request->input('note');
        $product->user_id = $user_id;
        $product->save();

        return redirect()->route('show');
    }

    public function shows()
    {
        $data =Post::get();

        return view('component.Showposts.showposts', ['data' => $data]);

    }



    public function formUpData($id)
    {
        $data = Post::where('user_id', $id)->first();

        return view('layout.posupdata', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $Thongtin = Post::where('id', $id)->first();;
        if($Thongtin->usser_id !== 1){

        }
    dd($Thongtin);
        $Thongtin->update(
            [
                'time' => $request->input('time'),
                'stadium' => $request->input('stadium'),
                'address' => $request->input('address'),
                'level' => $request->input('level'),
                'match' => $request->input('match'),
                'status' => $request->input('status'),
                'note' => $request->input('note'),
                'user_id' => $id,

            ]
        );



    }
}