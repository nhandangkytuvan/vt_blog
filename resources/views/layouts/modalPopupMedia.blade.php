<div class="modal fade" tabindex="-{{ $media->id }}" role="dialog" id="modalPopupMedia{{ $media->id }}" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Xem phương tiện</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9">
                        <img src="{{ asset('public/upload/'.$media->avatar) }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <p>Tên : <strong>{{ $media->name }}</strong></p>
                        <p>Danh mục : {{ $media->term ? $media->term->name : '' }}</p>
                        <p>Mô tả: {{ $media->description }}</p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn" data-clipboard data-clipboard-text="121">
                    <i class="glyphicon glyphicon-duplicate"></i> Copy
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->