<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'account' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:15',
            'last_name' => 'required|min:2|max:255',
            'name' => 'required|min:2|max:255',
        ], [
            'account.required' => 'tài khoản ko được để rỗng',
            'account.min' => 'account_name phải trên 6 kí tự',
            'account.max' => 'account_name phải nhỏ hơn 255 kí tự',
            'password.required' => 'mật khẩu không được để rỗng',
            'password.min' => 'password phải trên 6 kí tự',
            'password.max' => 'password phải nhỏ hơn 15 kí tự',
            'last_name.required' => 'họ tên không đc để rỗng',
            'last_name.min' => 'họ  phải trên 2 kí tự',
            'last_name.max' => 'họ ko phải nhỏ hơn 255 kí tự',
            'name.required' => 'mời bạn nhập lại tên',
            'name.min' => 'tên  phải trên 2 kí tự',
            'name.max' => 'tên ko phải nhỏ hơn 255 kí tự',
        ]);
        if ($validator->fails()){
            return redirect()->route('trangchu')->withErrors($validator);
        }

        if (User::where('account', $request->input('account'))->first()) {
            $validator = $validator->getMessageBag()->add('account', 'Tài khoản đã tồn tại');
            return redirect()->route('trangchu')->withErrors($validator);
        } else {
            $product = new User();
            $product->account = $request->input('account');
            $product->password = $request->input('password');
            $product->last_name = $request->input('last_name');
            $product->name = $request->input('name');

            $product->save();
            return redirect()->route('trangchu');

        }


    }
    public function logIn(Request $request)
    {

        if ($thongTin = User::where('account', $request->input('account'))->where('password', $request->input('password'))->first()) {
            Session::put('name', $thongTin->name);
            Session::put('last_name', $thongTin->last_name);
            Session::put('account', $thongTin->account);

            Session::put('id', $thongTin->id);


            return redirect()->route('trangchu');

        } else {
            return redirect()->route('trangchu');
        }


    }
    public function pageUpdate(){
        return view('component.profile.changePassword');
    }
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'newPassword' => 'required|min:6|max:15',
            'ConfirmPassword' => 'required',

        ], [

            'password.required' => ' mật khẩu không được để rỗng',

            'newPassword.required' => ' mật khẩu mới không được để rỗng',
            'newPassword.min' => 'mật khẩu phải trên 6 kí tự',
            'newPassword.max' => 'mật khẩu phải nhỏ hơn 15 kí tự',
            'ConfirmPassword.required' => 'xác nhận mật khẩu không được để rỗng'


        ]);
        $id=Session::get('id');

        $thongTin = User::where('id', $id)->first();
        if ($validator->fails()){

            return redirect()->route('update')->withErrors($validator);
        }

        if (  $request->input('password')!=$thongTin->password) {
            $validator = $validator->getMessageBag()->add('password', 'mật khẩu không đúng');
        }
        if ($request->input('newPassword') != $request->input('ConfirmPassword')) {
            $validator = $validator->getMessageBag()->add('ConfirmPassword', 'mật khẩu không khớp');
        } else {

            $thongTin->update([
                'password' => $request->input('newPassword')


            ]);
            return redirect()->route('user/profile');
        }
            return redirect()->route('update')->withErrors($validator);

    }
    public function edit(Request $request){
        $thongTin = User::where('id', Session::get('id'))->first();

        $thongTin->update([
            'last_name' => $request->input('last_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),

        ]);
        return redirect()->route('user/profile');
    }
    public function updataUser()
    {
        $data = User::where('id', Session::get('id'))->first();

        return view('component.profile.updataUser',['data' => $data]);
    }


    public function account()
    {

        $data = User::where('id', Session::get('id'))->first();


        return view('component.profile.profile', ['data' => $data]);


    }

    public function homePage()
    {


        return view('component.homepage.trangchu');


    }



    public function logOut()
    {

        session::flush();

        return redirect()->route('trangchu');
    }

}