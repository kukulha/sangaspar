@extends('layouts.admin')

@section('title', 'Crear Artículo')

@section('content')
<main class="container">
	<h3 class="azul-text title center">Crear Artículo</h3>
	<div class="row">
		<div class="col m8 s12 offset-m2">
			{{ Form::open(['route' => 'posts.store', 'files' => 'true']) }}
				@include('admin.posts.partials.form')
			{{ Form::close() }}
		</div>
	</div>
	
</main>
@endsection