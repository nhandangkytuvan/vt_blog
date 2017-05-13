@extends('layouts.app')

@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')

@section('content')
<form method="post"  enctype="multipart/form-data" action="{{ url('configs') }}">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo cấu hình</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ảnh</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="avatar" id="fileUpload">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="image-holder">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Nội dung</label>
                <textarea type="text" class="form-control autosize" name="content">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm cấu hình</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
