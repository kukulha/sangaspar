@extends('layouts.app')

@section('title')
{{ $post->name }}
@endsection

@section('SEO')
<meta name="keywords" content="@foreach($post->tags as $tag) {{ $tag->name }}, @endforeach">
<meta name="description" content="{{ $post->excerpt }}">
<meta name="author" content="Kukulha.com.mx">
<meta name="designer" content="Kukulha.com.mx">

<!--SEO Facebook -->    
<meta property="og:title" content="{{ $post->name }}">
<meta property="og:description" content="{{ $post->excerpt }}">
<meta property="og:type" content="article">
<meta property="og:url" content="http://sangasparclubcampestreydegolf.com/articulos/{{ $post->slug }}">
<meta property="og:image" content="http://sangasparclubcampestreydegolf.com/{{ Storage::url($post->file) }}">
<meta property=og:locale content="es_MX">
<meta property="og:site_name" content="San Gaspar">

<!--SEO Twitter -->    
<meta property=twitter:card content="summary">
<meta property=twitter:title content="{{ $post->name }}">
<meta property=twitter:description content="{{ $post->excerpt }}">
<meta property=twitter:creator content="@Kukulha">
<meta property=twitter:url content="http:sangasparclubcampestreydegolf/.com/articulos/{{ $post->slug }}">
<meta property=twitter:image content="http://sangasparclubcampestreydegolf.com/{{ Storage::url($post->file) }}">
<!--Schema.org-->
<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Article",
        "name": "{{ $post->name }}",
        "headline": "{{ $post->name }}",
        "url": "http://www.sangasparclubcampestreydegolf/articulos/{{ $post->slug }}",
        "image": "http://sangasparclubcampestreydegolf.com{{ Storage::url($post->file) }}",
        "description" : "{{ $post->excerpt }}",
        "keywords" : "@foreach($post->tags as $tag) {{ $tag->name }}, @endforeach",
        "author": {
			"@type": "Person",
			"name" : "{{ $post->user->name }}"
    	},
        "datePublished": "{{ $post->created_at }}",
        "dateModified": "{{ $post->updated_at }}",
        "publisher": {
			"@type": "Organization",
			"name" : "San Gaspar",
			"logo": {
				"@type": "imageObject",
				"url": "http://www.sangasparclubcampestreydegolf.com/img/logo.png"
			}
    	},
    	"mainEntityOfPage" : {
			"@type": "WebPage",
			"@id": "http://www.sangasparclubcampestreydegolf.com"
    	}
    }
</script> 

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