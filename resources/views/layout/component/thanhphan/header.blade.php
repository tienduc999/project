<head>
    <meta charset="UTF-8">
    <title>bootstrap</title>

    <link rel="stylesheet" href="http://localhost/thu-nghiem/assets/css/timdoithu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <?php
    if (isset($css)) {
        foreach ($css as $value) {
            echo '<link rel="stylesheet" href="' . $value . '">';
        }
    }
    ?>

</head>
<body>
<header class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 logo">
                <a href="index.php?action=dang-nhap"><img src="http://localhost/thu-nghiem/assets/images/logo-tim-doi-nhanh.png" alt=""></a>
            </div>
            <div class="col-md-8 navbar">

                <div class="dropdown  navbar">


                    <?php
                    if (isset($_SESSION["taikhoan"])) {//kt xem da có sesion. nesu co la da đăng nhap roi
                        echo ' <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button" id="dropdownMenu2">' . $_SESSION["taikhoan"] . '</button>';// sesion la doi tuong tai khoan.su dung ham getTentaikhan de lay gia tri ten tai khoan
                        echo '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href="index.php?action=suataikhoan"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""> <i class="fa fa-futbol-o"></i> Đang bắt đối</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""><i class="fa fa-history"></i> Lịch sử đặt sân</a></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""><i class="fa fa-futbol-o"></i> Đội bóng của tôi</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""><i class="fa fa-th-large"></i> Sân bóng của tôi</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href="index.php?action=unset"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
                    </ul>';
                    } else {
                        echo " <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"> ĐĂNG NHẬP</button>";
                    }
                    ?>


                </div>

                <div class="dropdown  navbar">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"><i class="fa fa-futbol-o" aria-hidden="true"></i>
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
                        Tìm đố   i

                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?action=hien_thi_danh_sach"> <i class="fa fa-futbol-o"></i> Đối đang chờ</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""> <i class="fa fa-futbol-o"></i>Danh sách đội bóng</a></a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><a href=""> <i class="fa fa-beer"></i>Mời đối giao lưu</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
