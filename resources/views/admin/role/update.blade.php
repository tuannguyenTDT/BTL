@extends('admin.layout.layout')
@section('content')
    <form action="{{route('role.updatePost')}}" method="POST" >
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên quyền cập nhật" value="{{$getRole->id}}" name="id" readonly="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên quyền</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên quyền cập nhật" value="{{$getRole->name}}" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mô Tả</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Mô tả về quyền sau khi cập nhật" value="{{$getRole->description}}" name="description">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection
