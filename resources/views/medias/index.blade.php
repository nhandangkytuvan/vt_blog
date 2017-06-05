
    <div class="panel panel-default">
        <div class="panel-heading text-center">Danh sách</div>
        <div class="panel-body">
            <div class="row" style="display: flex;flex-wrap: wrap;">
                @foreach($medias as $key => $media)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div>
                            <a href="javascript:;"  data-toggle="modal" data-target="#modalPopupMedia{{ $media->id }}">
                                <img src="{{ asset('public/upload/'.$media->avatar) }}" class="img-responsive center-block">
                            </a>
                        </div>
                        <div class="panel-footer clearfix">
                            {{ $media->name }}
                            <button type="button" class="btn" data-clipboard-demo data-clipboard-text="{{ asset('public/upload/'.$media->avatar) }}">
                                <i class="glyphicon glyphicon-link"></i> Copy
                            </button>
                            <div class="pull-right">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-option-horizontal"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                <span class="glyphicon glyphicon-eye-open"></span> Xem phương tiện
                                            </a> 
                                        </li> 
                                        <li>
                                            <a href="#!{{ url('medias/'.$media->id.'/edit') }}">
                                                <span class="glyphicon glyphicon-pencil"></span> Sửa phương tiện
                                            </a> 
                                        </li> 
                                        <li>
                                            <a href="javascript:;"  data-toggle="modal" data-target="#modalDestroyMedia{{ $media->id }}">
                                                <span class="glyphicon glyphicon-trash"></span> Xóa phương tiện
                                            </a> 
                                        </li>
                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="panel-footer">
            {{ $medias->appends(request()->except('page'))->links() }}
        </div>
    </div>

