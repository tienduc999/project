@extends('layouts.master')

@section('title', 'Page Title')

@section('conter')
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <div class="homepage">

    <div class="conter ">

            <div class="container">

                <div class="row ">
                    <div class=" col-md-6">
                        <h2>QUẢN LÝ SÂN, TÌM ĐỐI GIAO LƯU
                            ĐẶT SÂN TRỰC TUYẾN </h2>
                        <div class="description">
                            <ul>
                                <li><i class="glyphicon glyphicon-ok"></i> Hoàn toàn <span>miễn phí</span>!</li>
                                <li><i class="glyphicon glyphicon-ok"></i> <span>Tìm đối</span> giao lưu, kết bạn dễ
                                    dàng.
                                </li>
                                <li><i class="glyphicon glyphicon-ok"></i><span>Quản lý sân</span>, lịch biểu hiệu quả,
                                    tiết
                                    kiệm tối đa thời gian
                                </li>
                                <li><i class="glyphicon glyphicon-ok"></i>Giảm thiểu tối đa tình trạng <span> trống sân, cháy đối</span>!
                                </li>

                            </ul>
                            <div class="button">

                                <button type="button" class=""><i class="glyphicon glyphicon-arrow-right"></i>TÌM KIẾM
                                    THÊM
                                </button>
                            </div>
                            <div class="btn-group1 btn-group-justified">
                                <div class="btn-group">
                                    <a href="">209 Đối tại Hà nội</a>
                                </div>
                                <div class="btn-group">
                                    <a href="">3 Đối Tại Hồ chí Minh</a>
                                </div>
                                <div class="btn-group">
                                    <a href="">6.279 Đội bóng</a>
                                </div>
                            </div>
                            <div class="btn-group1 btn-group-justified">
                                <div class="btn-group">
                                    <a href="">168 Sân Bóng Tại Hà nội</a>
                                </div>
                                <div class="btn-group">
                                    <a href="">141 Sân bóng tại Hồ chí Minh</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 seach">
                        <div class="seach1">
                            <label>
                                <h2>
                                    <div class="khung"></div>
                                    Tạo tài khoản
                                </h2>
                            </label><br>

                            <form method="post" action="dangki">
                                {!! csrf_field() !!}

                                <div class="row11">

                                    <div class=" row">
                                        <div class="col-md-6"><input type="text" value="" name="last_name" placeholder="họ">
                                            <p class="loi"><?php
                                                if ($errors->get('last_name')) {

                                                    foreach ($errors->get('last_name') as $error) {
                                                        echo $error;
                                                    }
                                                }
                                                ?></p>
                                        </div>

                                        <div class="col-md-6"><input type="text" name="name"
                                                                     value="" placeholder="Tên">
                                            <p class="loi"><?php
                                                if ($errors->get('name')) {

                                                    foreach ($errors->get('name') as $error) {
                                                        echo $error;
                                                    }
                                                }
                                                ?></p></div>

                                        <br>


                                    </div>
                                    <input type="text" name="account" placeholder="Số điện thoại hoặc gmail"
                                           value=""><br>

                                    <p class="loi"><?php
                                        if ($errors->get('account')){

                                            foreach ($errors->get('account') as $error){
                                                echo $error;
                                            }
                                        }
                                        ?></p>


                                    <input type="password" name="password" value="<?php if (isset($matkhau)) {
                                        echo $matkhau;
                                    } ?>" placeholder="Mật Khẩu Mới"><br>
                                    <p class="loi"><?php
                                        if ($errors->get('password')) {

                                            foreach ($errors->get('password') as $error) {
                                                echo $error;
                                            }
                                        }
                                        ?></p>

                                </div>


                                <div class="row4">
                                    <input type="submit" name="nhap" value="Đăng Ký">
                                    <div class="login-social">
                                        <p> Hoặc đăng nhập với:</p>
                                        <i class="fa fa-facebook-square "></i>
                                        <i class="fa fa-google-plus-square "></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-control-note text-justify">
                            Bằng cách nhấn vào nút "Đăng ký", Bạn đồng ý với
                            <a href="/dieu-khoan-su-dung.html" target="_blank">điều khoản sử dụng</a> và
                            <a href="/chinh-sach-bao-mat.html" target="_blank">chính sách bảo mật</a> của chúng tôi.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection