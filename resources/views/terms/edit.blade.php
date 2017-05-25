@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data" action="{{ url('terms/'.$term->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa danh mục</div>
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
                    @if($term->avatar)
                    <img src="{{ asset('public/upload/'.$term->avatar) }}" class="img-responsive center-block">
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="name" value="{{ $term->name }}">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">Chọn cấp danh mục</label>
                        <select name="term_id" class="form-control">
                            <option value="0">Chọn cấp danh mục</option>
                            {!! APITerm::getOptionSelectBladeTerm($terms,$term->id,$term->term_id,0) !!}
                        </select>
                    </div>
                </div>
            </div>
            @php $content = json_decode($term->content,true);@endphp
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="description">{{ $term->description }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="keyword">{{ $content['keyword'] }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Meta</label>
                <textarea type="text" class="form-control autosize" name="meta">{{ $content['meta'] }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Sửa danh mục</button> 
            </div>
        </div>
    </div>
</form>
@endsection('content')
