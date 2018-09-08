@extends('layouts.master')

@section('title', 'Page Title')

@section('conter')
    <div class="Createteam">
        <div class="conter">

            <div class="img">
                <img src="images/banner-cate.jpg" alt="">
            </div>
            <div class="container">

                <div class="asida">
                    <div class="row ">
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
                        <div class="col-md-9 ">


                            <div class="iteam ">
                                <div class="thongbao">
                                    <strong>Chú Ý!</strong><br>
                                    <p>Bạn nên cập nhật số điện thoại vào tài khoản để đối tác có thể liên hệ trực tiếp.
                                    </p>
                                </div>
                                <div class="thongtin">
                                    <div class="heading-block"><h4><strong><i class="fa fa-map-marker"
                                                                              aria-hidden="true"></i>Thêm Đội Bóng mới
                                        </h4></strong></div>

                                    <form action="http://timkeonhanh.com/tao-doi/createInFormation" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Địa chỉ truy cập:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="access_address" id=""
                                                       placeholder="Địa chỉ truy cập">
                                            </div>
                                        </div><div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Tên Đội:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="team_name" id=""
                                                       placeholder="mời bạn nhập tên đội">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Khu Vực:</label>
                                            <div class="col-sm-9" >
                                                <select class="form-control" name="place">
                                                    <option value="Đà nẵng">Đà nẵng</option>
                                                    <option value="Hà Nội">Hà Nội</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Trình độ:</label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="level">
                                                    <option value="Trung Bình">Trung Bình</option>
                                                    <option value="Trung Bình yếu">Trung Bình yếu</option>
                                                    <option value="mới chơi">mới chơi</option>
                                                    <option value="khá">khá</option>
                                                    <option value="trung bình khá">trung bình khá</option>
                                                    <option value="mềm">mềm</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Logo:</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="" name="logo" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Ảnh đội:</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="" name="team_photo" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Độ tuổi:</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control tuoi col-sm-3" name="age_from"
                                                       id=""
                                                       placeholder="">
                                                <input type="text" class="form-control tuoi col-sm-3" name="to_age" id=""
                                                       placeholder="">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Giới
                                                thiệu:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="about" rows="3"></textarea>
                                            </div>
                                        </div>



                                        <div class="tạo">
                                            <input type="submit" name="" value="Tạo Đội">
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection