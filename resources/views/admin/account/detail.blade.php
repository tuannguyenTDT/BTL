@extends('admin.layout.layout')
@section('content')
    <form action="{{route('account.index')}}" method="GET">
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
                <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" readonly="true">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" readonly="true">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phoneNum" readonly="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Giới tính" name="phoneNum" readonly="true">
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
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phân quyền</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="role">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Trở lại trang chủ</button>
            </div>
        </div>
    </form>
@endsection
