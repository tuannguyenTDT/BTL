@extends('admin.layout.layout')
@section('content')
    <div class="card shadow mb-4">

        <div class="card-header">
            <span class="m-0 font-weight-bold text-primary float-left">Danh sách tài khoản trong hệ thống</span>
            <span class="m-0 font-weight-bold text-success float-right">
                @if(session('thongbao'))
                    {{session('thongbao')}}
                @endif
            </span>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>AccID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th colspan="3">Lựa Chọn</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($all as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phoneNum}}</td>
                            <td>{{$item->birthday}}</td>
                            <td>{{$item->address}}</td>
                            <td><a class="btn btn-info" href="{{route('job.updateGet',['id' => $item->id])}}" >Sửa</a></td>
                            <td><a class="btn btn-danger" href="{{route('job.delete',['id' => $item->id])}}" >Xóa</a></td>
                            <td><a class="btn btn-warning" href="{{route('account.detail',['id' => $item->id])}}" >Detail</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{$all->links() }}
                <div>
                    <a class="btn btn-success" href="{{route('account.addGet')}}" >Thêm mới tài khoản</a>
                </div>

            </div>
        </div>
    </div>
@endsection
