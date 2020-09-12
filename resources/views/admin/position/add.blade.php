@extends('admin.layout.layout')
@section('content')
    <form action="{{route('position.addPost')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên vị trí</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên quyền mới" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mô Tả</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Mô tả về quyền mới" name="description">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Thêm vị trí mới</button>
            </div>
        </div>
    </form>
@endsection