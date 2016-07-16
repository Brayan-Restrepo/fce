@extends('app')

@section('main-content')

<div class="container">
	<div class="row">
		<div class="col-md-5 col-lg-offset-1">
			@include('table.tabla-estadostg')
		</div>
		<div class="col-md-5">
			@include('table.tabla-modalidades')
		</div>
		
	</div>
</div>
@endsection
