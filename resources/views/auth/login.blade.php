@extends('laravel-usp-theme::master')
@section('content')

<form method="post" action="/login">
	@csrf 

	<div class="form-group row">
		<label for="codpes" class="col-sm-4 col-form-label text-md-right">Numero USP</label>
		<div class="col-md-6">
			<input type="text" name="codpes" value="{{ old('codpes') }}" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="codpes" class="col-md-4 col-form-label text-md-right">Senha</label>
		<div class="col-md-6">
			<input type="password" name="password" required>
		</div>
	</div>

	<div class="form-group row mb-0">
		<div class="col-md-8 offset-md-4">
			<button type="submit" class="btn btn-primary"> Entrar </button>
		</div>
	</div>
</form>

@endsection