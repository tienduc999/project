<html>

<head>
    <meta charset="UTF-8">
    <title>bootstrap</title>

    <link rel="stylesheet" href="http://timkeonhanh.com/assets/css/timdoithu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">


</head>
<body>
<header class="">

    <div class="container">
        <div class="row ">
            <div class="col-md-4 logo">
                <a href="http://timkeonhanh.com/trangchu"><img
                            src="http://timkeonhanh.com/assets/images/logo-tim-doi-nhanh.png" alt=""></a>
            </div>
            <div class="col-md-8 navbar">

                <div class="dropdown  navbar">




                    @if( Session::get('name') == true){{--kt xem da có sesion. nesu co la da đăng nhap roi--}}
                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"
                            id="dropdownMenu2">  {!! Session::get('last_name')  !!} {!! Session::get('name') !!}
                  </button>  {{--sesion la doi tuong tai khoan.su dung ham getTentaikhan de lay gia tri ten tai khoan--}}
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a><a
                                        href="http://timkeonhanh.com/user/profile"><i class="fa fa-user"></i> Thông tin tài
                                   khoản</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a><a href=""> <i
                                            class="fa fa-futbol-o"></i> Đang bắt đối</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""><i
                                            class="fa fa-history"></i> Lịch sử đặt sân</a></a></li>

                        <li role="presentation"><a  role="menuitem" tabindex="-1" href="http://timkeonhanh.com/tao-doi"></a><a href=""><i
                                            class="fa fa-futbol-o"></i> Đội bóng của tôi</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a><a href=""><i
                                            class="fa fa-th-large"></i> Sân bóng của tôi</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a><a
                                        href="http://timkeonhanh.com/dangxuat"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Đăng xuất</a></li>
                    </ul>
                    @else
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"> ĐĂNG NHẬP</button>
                   @endif


                </div>

                <div class="dropdown  navbar">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"><i
                                class="fa fa-futbol-o" aria-hidden="true"></i>
                        Đặt Sân

                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="dropdown  navbar">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown">
                        Tìm đố i

                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                   href="http://timkeonhanh.com/tim-doi-da-bong"> <i
                                        class="fa fa-futbol-o"></i> Đối đang chờ</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="http://timkeonhanh.com/Danh-sach-doi"> <i
                                            class="fa fa-futbol-o"></i>Danh sách đội bóng</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""> <i
                                            class="fa fa-beer"></i>Mời đối giao lưu</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('conter')


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="http://timkeonhanh.com/logIn">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" name="account" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-success btn-full-width" name="nhap">Submit</button>
                </form>
                <div class="icon">
                    <p>Hoặc đăng nhập với</p>
                    <span><i class="fa fa-facebook-square "></i></span>
                    <i class="fa fa-google-plus-square "></i>
                </div>

                <div class="pull-left ">
                    <a href="">Quên mật khẩu</a>
                </div>
                <div class="pull-right">
                    <a href="">Tạo tài khoản mới</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo">
                <img src="http://timkeonhanh.com/assets/images/logo-gray.png" alt=""><br>
                <i class="fa fa-facebook-square "></i>
                <i class="fa fa-google-plus-square "></i>
            </div>
            <div class="col-md-3 intor">
                <h5>TIMDOINHANH>COM</h5>
                <p><a href=""><i class="glyphicon glyphicon-envelope"></i>ducnguyentien68@gmail.com</a></p>
                <p><a href=""><i class="fa fa-facebook-square "></i>Facebook</a></p>
                <p><a href=""><i class="fa fa-google-plus-square "></i>Facebook</a></p>

            </div>
            <div class="col-md-3">
                <h5>THÔNG TIN</h5>
                <p><a href=""><i class="glyphicon glyphicon-play"></i>Giới thiệu</a></p>
                <p><a href=""><i class="glyphicon glyphicon-play"></i>Tiện ích</a></p>
                <p><a href=""><i class="glyphicon glyphicon-play"></i> Điều khoản sử dụng</a></p>
                <p><a href=""><i class="glyphicon glyphicon-play"></i> Chính sách bảo mật</a></p>


            </div>
            <div class="col-md-3 mobi-ap">
                <h5>ỨNG DỤNG</h5>
                <img src="http://timkeonhanh.com/assets/images/app-store.png" alt="">
                <img src="http://timkeonhanh.com/assets/images/ch-play.png" alt="">
                <p>
                    Hãy tải ngay ứng dụng TimDoiNhanh <strong>miễn phí</strong>vào điện thoại của bạn để cập nhật thông
                    tin nhanh nhất, mọi lúc, mọi nơi.
                </p>

            </div>
        </div>

    </div>
    <div class="footer">
        <p>Timdoinhanh © 2016. All rights reserved</p>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
</body>
</html>