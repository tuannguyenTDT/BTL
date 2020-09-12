@extends('admin.layout.layout')
@section('content')
    <div class="card shadow mb-4">

        <div class="card-header">
            <span class="m-0 font-weight-bold text-primary float-left">Danh sách công việc tuyển dụng</span>
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
                        <th>JobId</th>
                        <th>Công việc</th>
                        <th>Mô Tả</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th colspan="2">Lựa Chọn</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($all as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td><a class="btn btn-info" href="{{route('job.updateGet',['id' => $item->id])}}" >Sửa</a></td>
                            <td><a class="btn btn-danger" href="{{route('job.delete',['id' => $item->id])}}" >Xóa</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{$all->links() }}
                <div>
                    <a class="btn btn-success" href="{{route('job.addGet')}}" >Thêm mới công việc tuyển dụng</a>
                </div>

            </div>
        </div>
    </div>
@endsection
