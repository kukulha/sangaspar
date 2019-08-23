@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="center azul-text title">Iniciar Sesión</h3>
    <div class="row">
        <div class="col m6 s12 offset-m3">
            <section class="section center">
                <div class="card">
                    <div class="card-content">
                        {{ Form::open(['route' => 'login', 'method' => 'post']) }}

                            <div class="input-field">
                                {{ Form::label('email', 'Correo Electrónico') }}
                                {{ Form::email('email', null) }}
                                @error ('email')
                                    <span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                {{ Form::label('password', 'Contraseña') }}
                                {{ Form::password('password', null) }}
                                @error ('password')
                                    <span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                 <p>
                                     <label>
                                         {{ Form::checkbox('remember', null) }}
                                         <span>Recordar</span>
                                     </label>
                                 </p>
                            </div>

                            <div class="input-field">
                                {{ Form::submit('Iniciar Sesión', ['class' => 'btn gold waves-effect waves-light']) }}
                            </div>
                        {{ Form::close() }}
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
