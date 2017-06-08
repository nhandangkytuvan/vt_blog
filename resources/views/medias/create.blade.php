@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <form method="post"  enctype="multipart/form-data" action="{{ url('medias') }}">
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading text-center">Tạo phương tiện</div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Ảnh</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                        <input type="file" multiple class="form-control" name="avatar[]" id="fileUpload">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" id="image-holder">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label">Tên</label>
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="">Chọn cấp danh mục</label>
                            <select name="term_id" class="form-control">
                                <option value="0">Chọn cấp danh mục</option>
                                {!! APITerm::getOptionSelectBladePost($terms) !!}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Mô tả</label>
                    <textarea type="text" class="form-control autosize" name="description"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm mới</button> 
                </div>
            </div>
        </div>
    </form>
@endsection('content')
