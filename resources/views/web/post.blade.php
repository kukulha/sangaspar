@extends('layouts.app')

@section('title')
{{ $post->name }}
@endsection

@section('content')
<main class="container center">

	<article class="section">
		<h3 class="azul-text title">{{ $post->name }}</h3>
		<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
		<p class="azul-text small">Autor: {{ $post->user->name }}</p>
		<p class="small azul-text">Fecha: {{ $post->created_at->format('d \d\e M Y') }}</p>
		<p class="small azul-text">Categoria: <a href="{{ route('category', $post->category->slug) }}" class="gold-text">{{ $post->category->name }}</a></p>
		<div class="divider"></div>
		<p class="azul-text">{!! $post->body !!}</p>
		<div class="divider"></div>
		<p class="small azul-text">Etiquetas: 
			@foreach($post->tags as $tag)
				<a href="{{ route('tag', $tag->slug) }}"><span class="chip">{{ $tag->name }}</span></a>
			@endforeach
		</p>
	</article>

	<section class="section">
		<h4 class="azul-text title">Articulos Relacionados</h4>
		<div class="row">
			@foreach($related as $post)
				<div class="col m4 s12">
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
				</div>
			@endforeach
		</div>
	</section>

</main>
@endsection