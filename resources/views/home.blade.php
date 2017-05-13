@extends('layouts.app')

@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            You are logged in!
        </div>
    </div>
@endsection
