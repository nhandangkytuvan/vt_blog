
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
                        <div class="panel" style="border-left: 1px solid #d3e0e9;">
                            <ul class="list-group">
                                <li class="list-group-item">Tên : <strong>{{ $media->name }}</strong></li>
                                <li class="list-group-item">Danh mục : {{ $media->term ? $media->term->name : '' }}</li>
                                <li class="list-group-item">Mô tả: {{ $media->description }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
