
@extends('layouts.master')

@section('title', 'Page Title')

@section('conter')
    <div class="conter">
        <div class="container">
            <div class="breadcrum-line">
                <a href=""><i class="glyphicon glyphicon-home"></i></a><a href="">Trang chủ</a>
                <span><i class=" glyphicon glyphicon-chevron-right"></i><a href="">  tìm đối thủ</a></span>
            </div>
            <div class="iteam-card">

                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="" class="ng-binding">
                                <i class="glyphicon glyphicon-info-sign"></i>
                                &nbsp;&nbsp;Thông tin sân
                            </a>
                        </li>


                        <li class="ng-scope">
                            <a href="">
                                <i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;Giá thuê sân
                            </a>
                        </li>


                        <li class="ng-scope">
                            <a href="">
                                <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;Quản lý
                            </a>
                        </li>
                    </ul>
                    <div id="createUpdateStadiumTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="detail">


                            <form name="" class="ng-pristine ng-valid-email ng-valid ng-valid-required">
                                <div class="col-md-12">

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label"><strong>Người quản lý</strong></label>
                                        <div class="col-md-9">

                                            <table class="table table-striped table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <th>Email</th>
                                                    <th>Điện thoại</th>
                                                    <th class="text-right"></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="manager_name"
                                                               class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                               placeholder="Họ tên">
                                                    </td>
                                                    <td>
                                                        <input type="email" name="manager_email"
                                                               class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-email"
                                                               placeholder="Địa chỉ email">
                                                    </td>
                                                    <td>
                                                        <input type="tel" name="manager_phone"
                                                               class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                               placeholder="Điện thoại">
                                                    </td>
                                                    <td align="left">
                                                        <button class="btn btn-primary btn-sm" disabled="disabled">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                            Mời
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="clear-bordered"></div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label"><strong>Thông tin cơ bản</strong></label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Tên sân</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" placeholder="Nhập tên sân"
                                                   class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="clear-bordered"></div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Giới thiệu ngắn</label>
                                        <div class="col-md-9">
                                        <textarea
                                                name="about" class="form-control ng-pristine ng-untouched ng-valid ng-empty"></textarea>
                                        </div>

                                    </div>

                                    <div class="form-group row" style="display:none">
                                        <label class="col-md-3 col-form-label">Loại</label>
                                        <div class="col-md-5">
                                            <select id="ddlType"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                                <option name="surface" label="Bóng đá" value="1" selected="selected">Bóng đá</option>
                                                <option label="Tennis" value="2">Tennis</option>
                                                <option label="Bóng chuyền" value="3">Bóng chuyền</option>
                                                <option label="Bóng bàn" value="4">Bóng bàn</option>
                                                <option label="Cầu Lông" value="5">Cầu Lông</option>
                                                <option label="Bơi lội" value="6">Bơi lội</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="form-group row ng-scope" ng-if="form.selectedType.id==1">
                                        <label class="col-md-3 col-form-label">Mặt sân</label>
                                        <div class="col-md-5">
                                            <select id="ddlStadiumType"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                                <option label="Sân cỏ nhân tạo" value="1" selected="selected">Sân cỏ
                                                    nhân tạo
                                                </option>
                                                <option label="Sân cỏ tự nhiên" value="2">Sân cỏ tự nhiên</option>
                                                <option label="Sân cát" value="3">Sân cát</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="clear-bordered"></div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label"><strong>Địa chỉ</strong></label>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Tỉnh / Thành phố</label>
                                        <div class="col-md-5">
                                            <select
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                                <option label="Đà Nẵng" value="1" selected="selected">Đà Nẵng
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Quận / huyện</label>
                                        <div class="col-md-5">
                                            <input type="text"
                                                   name="district"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Số nhà / ngõ / tên đường</label>
                                        <div class="col-md-5">
                                            <input type="text"
                                                   name="apartment_number"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="clear-bordered"></div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label"><strong>Thông tin liên hệ</strong></label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Điện thoại</label>
                                        <div class="col-md-5">
                                            <input required="" placeholder="Điện thoại liên hệ đặt sân"
                                                   name="phone"
                                                   class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Địa chỉ email</label>
                                        <div class="col-md-5">
                                            <input name="email"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                   placeholder="Địa chỉ email">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Facebook</label>
                                        <div class="col-md-5">
                                            <input placeholder="Địa chỉ facebook"
                                                   name="facebook"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Website</label>
                                        <div class="col-md-5">
                                            <input placeholder="Địa chỉ website"
                                                   name="website"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="clear-bordered"></div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 control-label"><strong>Hình ảnh sân</strong></label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 control-label">Ảnh đại diện</label>
                                        <div class="col-md-5">
                                            <!-- ngIf: form.PicturePath -->
                                            <input id="previewImagePath" type="file" file-model="imageLogo">
                                            <input value="" type="hidden"
                                                   name="img"
                                                   class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="clear-bordered"></div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">Giới thiệu</label>
                                    <div class="col-md-9">
                                <textarea
                                        name="about"
                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="clear-bordered"></div>
                                </div>

                                <div class="form-group row" style="margin-top:30px">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9 text-right">


                                        <a class="btn btn-default" >Quay
                                            lại</a>
                                        &nbsp;


                                        <button type="submit" class="btn btn-primary btn-primary-extra ng-scope">
                                            <i class="fa fa-save"></i>
                                            Lưu thay đổi
                                        </button>

                                    </div>
                            </form>


                            </div>

                            <div></div>
                        </div>
                        <div class="ajax-file-upload-container"></div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection