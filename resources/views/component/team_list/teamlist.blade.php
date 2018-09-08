@extends('layouts.master')

@section('title', 'Page Title')

@section('conter')
    <div class="Information">
    <div class="conter">
        <div class="container">
            <div class="breadcrum-line">
                <a href=""><i class="glyphicon glyphicon-home"></i></a><a href="">Trang chủ</a>
                <span><i class=" glyphicon glyphicon-chevron-right"></i><a href="">  tìm đối thủ</a></span>
            </div>
            <div class="asida">
                <div class="row ">
                    <div class="col-md-3">
                        <h4><i class="glyphicon glyphicon-glass"></i>LỌC KẾT QUẢ</h4>
                        <div class="sidebar iteam">
                            <ul>
                                <li>
                                    <strong>Sân nhà</strong>
                                    <ul>

                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Hà Nội</label>
                                            <span>255</span>
                                        </li>
                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Hồ Chí Minh</label>
                                            <span>255</span>
                                        </li>
                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Đà nẵng</label>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Thừa Thiên Huế</label>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Bắc giang</label>
                                            <span>55</span>
                                        </li>
                                        <li>
                                            <i class="fa glyphicon glyphicon-play"></i>
                                            <label for="">Kon tum</label>
                                            <span>60</span>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                        <div class="sidebar iteam ">
                            <ul>
                                <li>
                                    <strong>Sân nhà</strong>
                                    <ul>

                                        <li>
                                            <input type="checkbox">
                                            <label for="">có sâm nha</label>
                                            <span>255</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">cần đi khach</label>
                                            <span>255</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>trình độ</strong>
                                    <ul>

                                        <li>
                                            <input type="checkbox">
                                            <label for="">khá</label>
                                            <span>12</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">mới chơi</label>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">mềm</label>
                                            <span>55</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">trung binh</label>
                                            <span>60</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">trung bình khá</label><span>7</span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label for="">trung bình yếu</label>
                                            <span>35</span>
                                        </li>
                                    </ul>
                                </li>
                                <li></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-9 ">
                        <div class="p-content">
                            <h4><i class="fa fa-futbol-o" aria-hidden="true"></i>Tìm đối đá bóng</h4>

                        </div>
                        <div class="seach">
                            <input type="text" placeholder="nhập tên khu vực">

                            <input type="submit" value="tìm kiếm">
                        </div>
                        @foreach($data as $thongtin)
                        <div class="iteam ">
                            <div class="header">


                                <div class="row ">
                                    <div class="col-md-2 ">
                                        <div class="logo">
                                            <img src="http://timkeonhanh.com/assets/images/sport.png" alt="">

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="header">
                                            <div class="match-header pull-left">
                                                <h4><strong>{!! $thongtin->team_name !!}</strong> </h4>
                                            </div>
                                            <div class="btn-doi  pull-right">
                                                <button class="btn btn-sm btn-default pull-right btn-batdoi modal-link-angularjs "
                                                        data-modal-tpl="match.recipientMaker" login-required="true"
                                                        data-modal-qs="toTeamId=8764&amp;toUserId=1536&amp;toMatchId=37517&amp;matchId=37517&amp;teamId=8764&amp;toTeamName=Vách Ngăn Việt Nam">
                                                    <i class="fa fa-send" aria-hidden="true"></i> mời đội giao lưu
                                                </button>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <span><a href=""><i class="fa fa-user"
                                                                    aria-hidden="true"></i>{!!$thongtin->last_name." ".$thongtin->name !!}</a></span>
                                                <span class="check"><a href=""><i class="fa fa-comments"
                                                                                  aria-hidden="true"></i> nói chuyện</a></span>
                                            </div>
                                            <div class="Information">
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-quote-left"></i><strong>Trình độ:</strong>
                                                    </div>
                                                    <div class="col-md-10"><p>{!! $thongtin->Level !!}</p></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-calendar-check-o"></i><strong>thời
                                                            gian</strong>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>{!! $thongtin->access_address!!}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-shirtsinbulk"></i><strong>Độ Tuổi</strong>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>{!! $thongtin->age_from.'-'.$thongtin->to_age !!}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-shirtsinbulk"></i><strong>Địa
                                                            chỉ:</strong>
                                                    </div>

                                                    <div class="col-md-10">
                                                        <p>{!! $thongtin->age_from !!}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-shirtsinbulk"></i><strong>Trình
                                                            độ:</strong>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>{!! $thongtin->agefrom !!}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i
                                                                class="fa fa-shirtsinbulk"></i><strong>Kèo:</strong></div>
                                                    <div class="col-md-10">
                                                        <p>{!! $thongtin->agefrom !!}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"><i class="fa fa-shirtsinbulk" n></i><strong>Trạng
                                                            thái:</strong>
                                                    </div>
                                                    <div class="col-md-10"><p>{!! $thongtin->agefrom !!}</p></div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                            @endforeach

                    </div>
                </div>
            </div>


        </div>
@endsection