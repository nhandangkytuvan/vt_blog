@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">Danh sách</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Ảnh</td>
                <td>Tên</td>
                <td>Mô tả</td>
                <td>Nội dung</td>
                <td>#</td>
            </tr>
            @foreach($configs as $key => $config)
            <tr>
                <td>{{ $config->id }}</td>
                <td>
                    @if($config->avatar)
                    <img src="{{ asset('public/upload/'.$config->avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                    @endif
                </td>
                <td><a href="#">{{ $config->name }}</a></td>
                <td>{{ $config->description }}</td>
                <td>{{ $config->content }}</td>
                <td>
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('configs/'.$config->id.'/edit') }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa cấu hình
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="#!modalDestroyConfig{{ $config->id }}"  data-toggle="modal" data-target="#modalDestroy">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa cấu hình
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
@endsection('content')
