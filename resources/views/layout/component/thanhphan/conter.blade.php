<div class="component">
    <div class="conter ">
        <div class="container">
            <div class="row ">
                <div class=" col-md-6">
                    <h2>QUẢN LÝ SÂN, TÌM ĐỐI GIAO LƯU
                        ĐẶT SÂN TRỰC TUYẾN </h2>
                    <div class="description">
                        <ul>
                            <li><i class="glyphicon glyphicon-ok"></i> Hoàn toàn <span>miễn phí</span>!</li>
                            <li><i class="glyphicon glyphicon-ok"></i> <span>Tìm đối</span> giao lưu, kết bạn dễ dàng.
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i><span>Quản lý sân</span>, lịch biểu hiệu quả, tiết
                                kiệm tối đa thời gian
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Giảm thiểu tối đa tình trạng <span> trống sân, cháy đối</span>!
                            </li>

                        </ul>
                        <div class="button">

                            <button type="button" class=""><i class="glyphicon glyphicon-arrow-right"></i>TÌM KIẾM THÊM
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

                        <form method="post" action="index.php?action=them_tai_khoan">
                            <div class="row11">

                                <div class=" row">
                                    <div class="col-md-6"><input type="text" value="<?php if (isset($ho)) {
                                            echo $ho;
                                        } ?>" name="ho" placeholder="họ">
                                        <p class="loi"><?php if (isset($kiemtraho)) {
                                                echo $kiemtraho;
                                            } ?></p>
                                    </div>

                                    <div class="col-md-6"><input type="text" name="ten" value="<?php if (isset($ten)) {
                                            echo $ten;
                                        } ?>" placeholder="Tên">
                                        <p class="loi"><?php if (isset($kiemtraten)) {
                                                echo $kiemtraten;
                                            } ?></p></div>
                                    <br>


                                </div>
                                <input type="text" name="tendangnhap" placeholder="Số điện thoại hoặc gmail"
                                       value="<?php if (isset($tentaikhan)) {
                                           echo $tentaikhan;
                                       } ?>"><br>

                                <p><?php if (isset($kiemtrataikhoan)) {
                                        echo $kiemtrataikhoan;
                                    } ?></p>

                                <input type="password" name="matkhau" value="<?php if (isset($matkhau)) {
                                    echo $matkhau;
                                } ?>" placeholder="Mật Khẩu Mới"><br>
                                <p><?php if (isset($kiemtramatkhau)) {
                                        echo $kiemtramatkhau;
                                    } ?></p>
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