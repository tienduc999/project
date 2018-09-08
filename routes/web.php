<?php

Route::get('/', function () {
    return view('welcome');
});
//Route::group(['prefix'=>'admin'],function (){
//    Route::get();
//});

Route::get('query/join', function () {
    $data=DB::table('post')->join('user_account','post.user_id','=','user_account.id')->get();
    dd($data);
    ;

});

Route::get('dangki', function () {
    return view('layout.dang-ki');
});
//tạo tài khoan
Route::post('/dangki', 'AccountController@dangKy');

//sửa tài khoan
Route::post('/update/{id}', 'AccountController@update');




Route::get('/formUpDataPost/{id}', 'PostController@formUpData');
//updata bài viết
Route::post('/updatePost/{id}', 'PostController@update');

Route::get('hienthi', function () {
    return view('layout.trang-chu');
});

//đăng nhập tài khoản
    Route::post('/logIn', 'AccountController@logIn')->name('logIn');

Route::get('dangxuat','AccountController@logOut' );



//trang chu
Route::get('/trangchu', 'AccountController@homePage')->name('trangchu');

//profile
Route::get('user/profile', 'AccountController@account')->name('user/profile');




// chỉnh sửa thông tin

Route::get('user/updataUser', 'AccountController@updataUser');
Route::post('user/updataUser/edit', 'AccountController@editAccount');
// chỉnh sửa mật khảu
Route::get('user/pageUpdate', 'AccountController@pageUpdate')->name('update');
Route::post('user/update', 'AccountController@update');

//post bài
    Route::get('post', function () {

    return view('component.post.post');

});
//post bai
    Route::post('/postbai', 'PostController@post');


//hiển thị danh sách
    Route::get('/tim-doi-da-bong', 'PostController@shows')->name('show');

    Route::get('/show', function () {
        return view('component.Showposts.showposts');
    });

    //tạo đội
    Route::get('/tao-doi', function () {
        return view('component.Createteam.createteam');
    });
Route::post('/tao-doi/createInFormation', 'TeamInFormationController@createInFormation');
Route::get('/Danh-sach-doi', 'TeamInFormationController@information');
Route::get('/Danh-sach-doi1', function () {
    return view('component.team_list.teamlist');
});

//store sân
Route::get('/dang-ki-san', function () {
    return view('component.stadium.store');
});
// bắt đội
Route::get('/bắt đội/{id}', function (){});
