
<ul>
	<li>ID:     {{ $estoque->id ?? '' }}</li>
	<li>Item:     {{ $estoque->item ?? '' }}</li>
	<li>Tamanho:    {{ $estoque->tamanho ?? ''}}</li>
	<li>Quantidade:    {{ $estoque->quantidade ?? '' }}</li>

	<li><a href="/estoque/{{$estoque->id}}/edit">Editar</a></li>
	<li>
		<form  action="/estoque/{{$estoque->id}}" method="POST">
			@csrf
			@method('delete')
			<button type='submit' onclick="return confirm('Are you Sure')">Delete</button>
		</form>
	</li>
</ul>