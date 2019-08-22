@extends('layouts.admin')

@section('title', 'Categorías')


@section('content')
<main>
	<section class="container section center">
		<h3 class="azul-text title">Categorías</h3>
			<a href="{{ route('categories.create') }}" class="btn gold">Crear</a>
		<table class="striped centered responsive-table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td>{{ $category->slug }}</td>
						<td width="10px"><a href="{{ route('categories.edit', $category->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
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