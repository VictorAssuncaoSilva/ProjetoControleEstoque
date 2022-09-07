<div class="form-group">

	Item <input type="text" name="item" value="{{ old('item', $estoque->item) }}" class="form-control">

	Tamanho <input type="text" name="tamanho" value="{{old('tamanho', $estoque->tamanho) }}" class="form-control"> 

	Quantidade <input type="text" name="quantidade" value="{{old('quantidade', $estoque->quantidade)}}" class="form-control"><br>

	<button class="btn btn-outline-success" type="submit"> Enviar </button>


</div>




