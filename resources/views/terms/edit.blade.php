
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
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="name" value="{{ $term->name }}">
                @if ($errors->has('name'))
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
                            {!! APITerm::getOptionSelectBladeTerm($terms,$term->id,$term->term_id,0) !!}
                        </select>
                    </div>
                </div>
            </div>
            @php $orther = json_decode($term->orther,true);@endphp
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="description">{!! $term->description !!}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="keyword">{!! isset($orther['keyword']) ? $orther['keyword'] : '' !!}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Meta</label>
                <textarea type="text" class="form-control autosize" name="meta">{!! isset($orther['meta']) ? $orther['meta'] : '' !!}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Sửa danh mục</button> 
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        autosize($("textarea.autosize"));
    });
</script>

