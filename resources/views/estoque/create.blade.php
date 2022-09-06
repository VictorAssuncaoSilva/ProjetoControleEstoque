@extends('main')

@section('content')
	
	<form method="POST" action="/estoque">

		@csrf
		@include('estoque.partials.form')
		
	</form>

@endsection