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

                                                <label for=""><i class="fa glyphicon glyphicon-play"></i><a href="http://timkeonhanh.com/"> Tài khoản</a></label>

                                            </li>
                                        </ul>
                                    </li>


                                </ul>

                            </div>
                        </div>
                        <div class="col-md-9 ">
                            <div class="row iteam-car iteam">
                                <div class="col-md-4 img">

                                    <p>Mật khẩu Hiện tại: </p>
                                    <p>Mật khẩu mới: </p>
                                    <p>Xác Nhận Mật Khẩu:</p>
                                </div>

                                <div class="col-md-8 tt">


                                    <form action="http://timkeonhanh.com/user/update" method="post">
                                        {!! csrf_field() !!}
                                        <input type="password" name="password"><br>

                                        <span><?php
                                            if ($errors->get('password')) {

                                                foreach ($errors->get('password') as $error) {
                                                    echo $error;
                                                }
                                            }
                                            ?></span><br>
                                        <input type="password" name="newPassword"><br>

                                        <span><?php
                                            if ($errors->get('newPassword')) {

                                                foreach ($errors->get('newPassword') as $error) {
                                                    echo $error;
                                                }
                                            }
                                            ?></span><br>
                                        <input type="password" name="ConfirmPassword"><br>

                                        <span><?php
                                            if ($errors->get('ConfirmPassword')) {

                                                foreach ($errors->get('ConfirmPassword') as $error) {
                                                    echo $error;
                                                }
                                            }
                                            ?></span><br>

                                        <div class="form-group col-md-11">
                                            <input type="submit" value=" CẬP NHẬT THONG TIN " name="nhap">
                                        </div>
                                        <p></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@endsection