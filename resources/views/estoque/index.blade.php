@extends('main')

	@section('content')

	<h3>--= Estoque =--</h3>

	<a href="/estoque/create">Adicione um novo item</a>

	@forelse($estoque as $estoque)

		@include('estoque.partials.fields')
		<hr>

	@empty

		<p>Nao ha itens cadastrados</p>

	@endforelse

	@endsection

	