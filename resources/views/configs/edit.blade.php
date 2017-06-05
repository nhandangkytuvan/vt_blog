
<form method="post"  enctype="multipart/form-data" action="{{ url('configs/'.$config->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa cấu hình</div>
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
                    @if($config->avatar)
                    <img src="{{ asset('public/upload/'.$config->avatar) }}" class="img-responsive center-block">
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="name" value="{{ $config->name }}">
            </div>
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control autosize" name="description">{{ $config->description }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Nội dung</label>
                <textarea type="text" class="form-control autosize" name="content">{{ $config->content }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Sửa lại</button> 
            </div>
        </div>
    </div>
</form>
