@extends('admin.layout.layout')
@section('content')
    <form action="{{route('account.addPost')}}" method="POST">
            <span class="m-0 font-weight-bold text-danger float-none">
                @if(session('thongbao'))
                    {{session('thongbao')}}
                @else
                    Tạo mới tài khoản
                @endif
            </span>
            <br>
        <br>

        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Họ và tên</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Mật khẩu" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Nhập lại mật khẩu" name="repeatPassword">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phoneNum">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="Nam">
                <label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="Nữ">
                <label class="form-check-label" for="inlineRadio2">Nữ</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày sinh</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Ngày sinh" name="birthday">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="address">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phân Quyền</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="inlineRadio4" value="1">
                <label class="form-check-label font-weight-bold" for="inlineRadio4">ADMIN</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="inlineRadio5" value="2">
                <label class="form-check-label font-weight-bold" for="inlineRadio5">STUDENT</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="inlineRadio6" value="3">
                <label class="form-check-label font-weight-bold" for="inlineRadio6">HR</label>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tạo mới tài khoản</button>
            </div>
        </div>
    </form>
@endsection
