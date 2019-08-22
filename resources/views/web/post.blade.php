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
		<p class="small azul-text">Categoria: <a href="" class="chip white-text gold">{{ $post->category->name }}</a></p>
		<div class="divider"></div>
		<p class="azul-text">{!! $post->body !!}</p>
	</article>

</main>
@endsection