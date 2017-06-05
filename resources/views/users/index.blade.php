
    <div class="panel panel-default">
        <div class="panel-heading text-center">Danh sách</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Ảnh</td>
                <td>Tên</td>
                <td>Email</td>
                <td>Số bài</td>
                <td>#</td>
            </tr>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    @if($user->avatar)
                    <img src="{{ asset('public/upload/'.$user->avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                    @endif
                </td>
                <td><a href="#">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td></td>
                <td>
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#!{{ url('users/'.$user->id.'/edit') }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa tài khoản
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="javascript:;"  data-toggle="modal" data-target="#modalDestroyUser{{ $user->id }}">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa tài khoản
                                        </a> 
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    </div> 
                </td>
            </tr>
            @endforeach
        </table>
    </div>

