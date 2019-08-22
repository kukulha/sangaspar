@extends('layouts.app')

@section('title', 'Lista de Artículos')

@section('content')
<main class="container center">
	<h3 class="azul-text title">Lista de Artículos</h3>
	<div class="row">
		<div class="col m4 s12">
			@foreach($posts as $post)
				<div class="card">
					<div class="card-image">
						<img src="{{ Storage::url($post->file) }}" alt="">
					</div>
					<div class="card-content">
						<span class="card-title">{{ $post->name }}</span>
						<p class="azul-text">{{ $post->excerpt }}</p>
					</div>
					<div class="card-action">
						<a href="{{ route('post', $post->slug) }}" class="btn gold">Leer más</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</main>
@endsection