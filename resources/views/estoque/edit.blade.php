@extends('main')

@section('content')
	<form method="POST" action="/estoque/{{$estoque->id}}">
		
		@csrf
		@method('patch')
		@include('estoque.partials.form')

	</form>
@endsection
