<div class="modal fade" tabindex="-{{ $config->id }}" role="dialog" id="modalDestroyConfig{{ $config->id }}" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xóa cấu hình</h4>
            </div>
            <div class="panel-body">
                <p>
                    Bạn chắc chắn muốn xóa cấu hình. Thuộc quyền admin cao nhất. Chắc chắn ko ảnh hưởng gì đến chỗ khác.
                </p>
            </div>
            <div class="panel-footer">
                <form action="{{ url('configs/'.$config->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->