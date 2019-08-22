{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="input-field">
	{{ Form::label('name', 'Titulo del Artículo') }}
	{{ Form::text('name', null, ['id' => 'name'] ) }}
	@error ('name')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['id' => 'slug'] ) }}
	@error ('slug')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('category_id', 'Categoría*') }}
	<br>
	{{ Form::select('category_id' , $categories, null) }}
</div>

<div class="input-field">
		{{ Form::label('tags', 'Etiquetas') }}
<br>
		{{Form::text('tags', null, ['id' => 'tags', 'data-role' => 'materialtags'])}}

</div>

<div class="input-field">
	{{ Form::label('excerpt', 'Extracto')}}
	{{ Form::textarea('excerpt', null, ['class' => 'materialize-textarea','data-length' => '144', 'id' => 'excerpt']) }}
	@error ('excerpt')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field file-field">
	<div class="btn gold">
		<span>Imagen</span>
		{{ Form::file('file', null) }}
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null, ['class' => 'file-path validate']) }}
	</div>
	@error ('file')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{Form::textarea('body', null, ['id' => 'body'])}}
</div>

<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-small gold '])}}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
		$('#name, #slug').stringToSlug({
			callback: function(text){
				$('#slug').val(text);
			}
		});

		ClassicEditor
    			.create( document.querySelector('#body' ))
    			.catch( error => {
        		console.error( error );
    		} );
	});
</script>
@endsection