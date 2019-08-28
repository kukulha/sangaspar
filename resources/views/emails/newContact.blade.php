@component('mail::message')
![Logotipo San Gaspar]({{ asset('/img/logo.png')}} "Logo San Gaspar")

# Nuevo prospecto de la web

**Nombre:**   {{ $data->name }}

**Correo:**   {{ $data->email }}

**Teléfono:** {{ $data->phone }}


Gracias<br>
##{{ config('app.name') }}
@endcomponent
