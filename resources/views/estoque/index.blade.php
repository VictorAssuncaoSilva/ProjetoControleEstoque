@extends('main')


	@section('content')

	<h1>Estoque</h1>


	<a class="btn btn-outline-info" href="/estoque/create" role="button" text-decoration='none'>Novo Item</a>
	<br>
	

	@forelse($estoque as $estoque)

		@include('estoque.partials.fields')
		<hr>

	@empty

		<p>Nao ha itens cadastrados</p>

	@endforelse

	@endsection

	