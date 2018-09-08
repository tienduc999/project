@extends('layouts.master')

@section('title', 'Page Title')

@section('conter')
    <div class="conter">

        <div class="sualoi">
            <div class="container">
                <div class="breadcrum-line">
                    <a href="http://timkeonhanh.com/user/profile">Thông tin cá nhân</a>
                    <a href="http://timkeonhanh.com/user/pageUpdate"> Thay đổi mật khẩu</a>
                </div>
            </div>
        </div>
        <div class="background-color">
            <div class="container">
                <div class="asida">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="sidebar iteam">
                                <ul>
                                    <li>

                                        <ul>

                                            <li>

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i>Đang bắt
                                                    đối</label>

                                            </li>
                                            <li>

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i>Đặt sân</label>

                                            </li>
                                            <li>

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i>Quản lý đội
                                                    bóng</label>

                                            </li>
                                            <li>

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i>Quản lý sân</label>

                                            </li>
                                            <li>

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i><a href="index.php?action=suataikhoan"> Tài khoản</a></label>

                                            </li>
                                        </ul>
                                    </li>


                                </ul>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row iteam-car iteam">
                                <div class="col-md-4 img">

                                    <img src="http://timkeonhanh.com/assets/images/default-user.png" alt="">
                                </div>

                                <div class="col-md-8 tt">




                                <span><p><strong>Họ Và Tên:  {!! $data->last_name !!} {!! $data->name !!}</strong></p></span>
                                    <span><p><strong>Email:  {!! $data->email !!}</strong> </p></span>
                                    <p><strong>Điện thoại:{!! $data->phone !!} </strong></p>

                                    <div class="form-group col-md-11">
                                        <a href="http://timkeonhanh.com/user/updataUser" id="btnProfileEdit"
                                           class="btn mb20 btn-small btn-primary">Chỉnh sửa</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@endsection