
    <form method="post"  enctype="multipart/form-data" action="{{ url('posts') }}">
        {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-heading text-center">Tạo danh mục</div>
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
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label">Tên</label>
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
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
                                {!! APITerm::getOptionSelectBladePost($terms) !!}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Mô tả</label>
                    <textarea type="text" class="form-control autosize" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Nội dung</label>
                    <textarea type="text" class="form-control tinymce" name="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Keyword</label>
                    <textarea type="text" class="form-control autosize" name="keyword">{{ old('keyword') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit"><span class="fa fa-puzzle-piece"></span>  Thêm bài viết</button> 
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: 'textarea.tinymce',
                font_formats: 'Arial=arial,helvetica,sans-serif;',
                height:600,
                theme: 'modern',
                fontsize_formats: "8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px",
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'paste textcolor colorpicker textpattern imagetools toc responsivefilemanager'
                ],
                toolbar1: 'undo redo insert styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent',
                toolbar2: 'print preview media forecolor backcolor fontsizeselect link image code responsivefilemanager fullscreen',
                image_advtab: true,
                external_filemanager_path:"http://localhost/vt_blog/filemanager/",
                external_plugins: { "filemanager" : "http://localhost/vt_blog/filemanager/plugin.min.js"},
            }); 
            autosize($("textarea.autosize"));
        });
    </script>

