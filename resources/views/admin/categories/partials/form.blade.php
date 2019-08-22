<div class="input-field">
	{{ Form::label('name', 'Categoría') }}
	{{ Form::text('name', null, ['id' => 'name'] ) }}
</div>
<div class="input-field">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['id' => 'slug'] ) }}
</div>
<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-small gold '])}}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$('#name, #slug').stringToSlug({
			callback: function(text){
				$('#slug').val(text);
			}
		});
	});
</script>
@endsection