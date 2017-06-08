
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa phương tiện</h4>
            </div>
            <div class="panel-body">
                <p>
                    Xóa phượng tiện có thể gây ra lỗi thiếu ảnh trong bài viết.
                </p>
            </div>
            <div class="panel-footer">
                <form action="{{ url('medias/'.$media->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
