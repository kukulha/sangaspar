@extends('layouts.app')

@section('SEO')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="Kukulha.com.mx">
<meta name="designer" content="Kukulha.com.mx">

<!--SEO Facebook -->    
<meta property="og:title" content="{{ config('app.name') }}">
<meta property="og:description" content="Situado en San Gaspar de los Reyes, municipio de Jalostotitlán, Jalisco, México, un lugar perfecto para la práctica de Golf que te hará sentir como en casa. Nuestro campo Diseñado por Profesionales Mexicanos retará a todo jugador de cualquier nivel">
<meta property="fb:app_id" content=""/>  
<meta property="og:type" content="website">
<meta property="og:url" content="http://.com.mx/">
<meta property="og:image" content="http://.com.mx/khms.png">
<meta property=og:locale content="es_MX">
<meta property="og:type" content="website">
<meta property="og:site_name" content="">

<!--SEO Twitter -->    
<meta property=twitter:card content="summary">
<meta property=twitter:title content="">
<meta property=twitter:description content="Situado en San Gaspar de los Reyes, municipio de Jalostotitlán, Jalisco, México, un lugar perfecto para la práctica de Golf que te hará sentir como en casa. Nuestro campo Diseñado por Profesionales Mexicanos retará a todo jugador de cualquier nivel">
<meta property=twitter:creator content="@">
<meta property=twitter:url content="http://.com.mx">
<meta property=twitter:image content="">

<!--Schema.org --> 
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "name": "San Gaspar",
            "url": "http://www.sangasparclubcampestreydegolf.com",
            "image": "http://sangasparclubcampestreydegolf.com/img/logo.png",
            "description" : "Situado en San Gaspar de los Reyes, municipio de Jalostotitlán, Jalisco, México, un lugar perfecto para la práctica de Golf que te hará sentir como en casa. Nuestro campo Diseñado por Profesionales Mexicanos retará a todo jugador de cualquier nivel",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "San Gaspar de los Reyes",
                "addressRegion": "MX-JAL",
                "postalCode": "47130",
                "streetAddress": "S/N"
            },
            "telephone": "+52 33-39-66-22-49",
            "priceRange" : "$$"
        }
    </script> 
@endsection

@section('title', 'Club Campestre y de Golf')

@section('content')
<header>
	<div class="hero">
		<div class="valign-wrapper">
			<div class="container center">
				<img src="/img/logo-bco.png" class="responsive-img" alt="">
				<h2 class="white-text">¡Nunca antes fue tan fácil <br> Pertenecer a un club de golf!</h2>
				<a href="#contact" class="btn gold">Obtén ya tu acción</a>
			</div>
		</div>
	</div>
</header>

<main>
	<section class="section">
		<div class="container center">
			<h3 class="azul-text title">La exclusividad no es un lujo</h3>
			<h4 class="azul-text">Sino una Necesidad</h4>
			<div class="row section">
				<div class="col m3 s12 center scale">
					<i class="fas fa-hand-holding-heart gold-text fa-7x" ></i>
					<p class="azul-text">Vigencia Vitalicia heredable (99 Años)</p>
				</div>
				<div class="col m3 s12 center scale">
					<i class="fas fa-search-dollar gold-text fa-7x" ></i>
					<p class="azul-text">Deducible de Impuestos</p>
				</div>
				<div class="col m3 s12 center scale">
					<i class="fas fa-hand-holding-usd gold-text fa-7x" ></i>
					<p class="azul-text">Recuperas tu inversión, mas otra cantidad igual a la misma</p>
				</div>
				<div class="col m3 s12 center scale">
					<i class="fas fa-tools gold-text fa-7x" ></i>
					<p class="azul-text">Sin cuota mensual de Mantenimiento</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section azul z-depth-3">
		<div class="container center">
			<div class="row">
				<div class="col m6 s12">
					<h3 class="white-text title">San Gaspar no tiene Límites</h3>
					<p class="white-text justify">Situado en San Gaspar de los Reyes, municipio de Jalostotitlán, Jalisco, México, un lugar perfecto para la práctica de Golf que te hará sentir como en casa. <br>Nuestro campo <span class="bold">Diseñado por Profesionales Mexicanos</span> retará a todo jugador de cualquier nivel, además de contar con un paisaje boscoso con más de 20,000 árboles de cedro y mezquite, creando una atmósfera inmejorable en una extensión de 130-00-00 hectáreas y un trazo de 18 hoyos que prometerá una experiencia diferente ideal para disfrutar de este deporte. <br>San Gaspar Club Campestre & de Golf* es hábitat de una gran flora y fauna. Además de divertirse jugando Golf que es el deporte por excelencia, podrás disfrutar de la tranquilidad de lugar y hospedarte en las placenteras cabañas, como también de:</p>
					<ul>
						<li class="white-text justify">- Canchas de Tenis</li>
						<li class="white-text justify">- Alberca</li>
						<li class="white-text justify">- Chapoteadero</li>
						<li class="white-text justify">- Gimnasio</li>
						<li class="white-text justify">- Equinoterapia</li>
						<li class="white-text justify">-Paseos a Caballo</li>
						<li class="white-text justify">- Circuito de cuerdas</li>
						<li class="white-text justify">- Tirolesas</li>
						<li class="white-text justify">- Campo Tiro con Arco</li>
						<li class="white-text justify">- y más....</li>
					</ul>
				</div>
				<div class="col m6 s12">
					<img src="/img/sng.jpg" class="responsive-img" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section scrollspy" id="contact">
		<div class="container center">
			<h3 class="azul-text title">Obtén ya tu acción</h3>
			<div class="row">
				<div class="col m6 offset-m3 s12 iso">
				{{ Form::open(['route' => 'messages.store'])}}
					<div class="input-field">
						{{ Form::label('name', 'Nombre')}}
						{{ Form::text('name', null) }}
					</div>
					<div class="input-field">
						{{ Form::label('email', 'Correo Electrónico')}}
						{{ Form::email('email', null) }}
					</div>
					<div class="input-field">
						{{ Form::label('phone', 'Teléfono')}}
						{{ Form::tel('phone', null) }}
					</div>
					<div class="input-field">
						{{ Form::submit('Enviar', ['class' => 'btn gold'])}}
					</div>
				{{ Form::close()}}
			</div>
			</div>
			
		</div>
	</section>
</main>

@if (session('infom'))
    <script>
        alert('{{ session('infom') }}');  
    </script>
@endif
@endsection
