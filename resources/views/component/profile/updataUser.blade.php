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

                                    <img src="http://localhost/thu-nghiem/assets/images/default-user.png" alt="">
                                </div>

                                <div class="col-md-2 updataUser">




                                    <span><p><strong>Họ </strong></p> </span>
                                    <span><p><strong>Tên </strong></p></span>
                                    <span><p><strong>Email:</strong> </p></span>
                                    <p><strong>Điện thoại: </strong></p>



                                </div>
                                <div class="col-md-6 updataUser">
                                    <form action="http://timkeonhanh.com/user/updataUser/edit" method="post">
                                        {!! csrf_field() !!}
                                        <input type="text" value="{!! $data->last_name !!}" name="they">
                                        <input type="text" value="{!! $data->name !!}" name="name">
                                        <input type="email" value="{!! $data->email !!}" name="email">
                                        <input type="text" value="{!! $data->phone !!}" name="phone">
                                        <div class="form-group col-md-11">
                                            <input  type="submit" id="btnProfileEdit"
                                                    class="btn mb20 btn-small btn-primary" value="Chỉnh sửa" name="nhap">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@endsection