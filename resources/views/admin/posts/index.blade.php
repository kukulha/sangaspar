@extends('layouts.admin')

@section('title', 'Artículos')


@section('content')
<main>
	<section class="container section center">
		<h3 class="azul-text title">Artículos</h3>
			<a href="{{ route('posts.create') }}" class="btn gold">Crear</a>
		<table class="striped centered responsive-table">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td width="100px"><img src="{{ Storage::url($post->file) }}" class="responsive-img" alt=""></td>
						<td>{{ $post->name }}</td>
						<td>{{ $post->slug }}</td>
						<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red white-text']) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</main>
@endsection