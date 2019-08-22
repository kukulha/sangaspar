@extends('layouts.admin')

@section('title', 'Mensajes')

@section('content')
<main>
	<section class="container section">
		<h3 class="azul-text title center">Mensajes</h3>
		<table class="striped centered responsive-table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->phone }}</td>
						<td width="10px"><a href="" class="btn green">Ver</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
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