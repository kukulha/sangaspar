@extends('layouts.admin')

@section('title', 'Crear Categoría')

@section('content')
<main class="container center">
	<h3 class="azul-text title">Crear Categoría</h3>
	<div class="row">
		<div class="col m8 s12 offset-m2">
			{{ Form::open(['route' => 'categories.store']) }}
			@include('admin.categories.partials.form')
			{{ Form::close() }}
		</div>
	</div>
	
</main>
@endsection