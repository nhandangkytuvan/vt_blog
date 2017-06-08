
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa danh mục</h4>
            </div>
            <div class="panel-body">
                <p>
                    Xóa danh mục sẽ xóa toàn bộ bài viết trong danh mục. Hãy chuyển bài viết sang danh mục khác nếu cần giữ lại.
                </p>
            </div>
            <div class="panel-footer">
                <form action="{{ url('terms/'.$term->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
