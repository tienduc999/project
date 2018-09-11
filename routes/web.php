<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => '/Admin'], function () {

    Route::group(['prefix' => '/quan-ly-nguoi-dung'],function (){
        Route::get('shows','AccountController@show');
        Route::get('delete','AccountController@delete');
        Route::get('edit','AccountController@edit');

    });

    Route::group(['prefix' => '/quan-ly-bai-viet'],function (){
        Route::get('shows','PostController@show');
        Route::get('delete','PostController@delete');

    });
    Route::group(['prefix' => '/quan-ly-sân bóng'],function (){
        Route::get('shows','PostController@show');
        Route::get('delete','   @delete');

    });

});

//trang chủ
Route::get('/trangchu', 'AccountController@homePage')->name('trangchu');
//tạo tài khoan
Route::post('/dangki', 'AccountController@store');

// chỉnh sửa thông tin

Route::group(['prefix' => '/user'], function () {

    Route::get('/updataUser', 'AccountController@updataUser');
    Route::post('/updataUser/edit', 'AccountController@edit');
    Route::get('/pageUpdate', 'AccountController@pageUpdate')->name('update');
    Route::post('/update', 'AccountController@update');
});;
//đăng nhập tài khoản

Route::post('/logIn', 'AccountController@logIn')->name('logIn');

Route::get('dangxuat', 'AccountController@logOut');


//sửa tài khoan
Route::post('/update/{id}', 'AccountController@update');


Route::get('/formUpDataPost/{id}', 'PostController@formUpData');
//updata bài viết
Route::post('/updatePost/{id}', 'PostController@update');

Route::get('hienthi', function () {
    return view('layout.trang-chu');
});



//profile
Route::get('user/profile', 'AccountController@account')->name('user/profile');


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
Route::get('/bắt đội/{id}', function () {
});
///////////////////////////
///
Route::get('/thi', 'ThiController@thi');
Route::get('/thi1', 'ThiController@user');