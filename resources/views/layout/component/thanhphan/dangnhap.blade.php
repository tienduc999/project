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
                <form role="form" method="post" action="/app/public/logIn">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="text" name="account_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
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