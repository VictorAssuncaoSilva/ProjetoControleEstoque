<style type="text/css">
	
	a{
		text-decoration: none;
	}

</style>



<ul>
	<li>ID:     {{ $estoque->id ?? '' }}</li>
	<li>Item:     {{ $estoque->item ?? '' }}</li>
	<li>Tamanho:    {{ $estoque->tamanho ?? ''}}</li>
	<li>Quantidade:    {{ $estoque->quantidade ?? '' }}</li>

	<div class="form-check-inline">

		
		<a class="btn btn-outline-primary" href="/estoque/{{$estoque->id}}/edit" role="button" style="text-decoration: none;">Editar</a>
		

		<form  action="/estoque/{{$estoque->id}}" method="POST">
			@csrf
			@method('delete')
			<button class="btn btn-outline-danger" type='submit' onclick="return confirm('Are you Sure')">Delete</button>

		</form>
	</div>
</ul>

