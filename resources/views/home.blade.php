@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-sm-3">
		    @include('layouts.menuUserAdmin')
		</div>
		<div class="col-sm-6" ng-view>
		    
		</div>
	</div>
@endsection
