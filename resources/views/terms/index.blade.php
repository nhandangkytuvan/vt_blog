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
                <td>Số bài</td>
                <td>L.xem</td>
                <td>#</td>
            </tr>
            @foreach($terms as $key => $term)
            <tr>
                <td>{{ $term->id }}</td>
                <td>
                    @if($term->avatar)
                    <img src="{{ asset('public/upload/'.$term->avatar) }}" class="img-responsive center-block" style="max-width: 50px;">
                    @endif
                </td>
                <td><a href="#">{{ $term->name }}</a></td>
                <td></td>
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
                                        <a href="#">
                                            <span class="glyphicon glyphicon-eye-open"></span> Xem danh mục
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="{{ url('terms/'.$term->id.'/edit') }}">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa danh mục
                                        </a> 
                                    </li> 
                                    <li>
                                        <a href="#!terms/{{ $term->id }}/delete"  data-toggle="modal" data-target="#modalDestroy">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa danh mục
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

