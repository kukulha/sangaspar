@component('mail::message')
![Logotipo San Gaspar]({{ asset('/img/logo.png')}} "Logo San Gaspar")

# Gracias {{ $data->name }}

Nos encanta saber de ti, estas apunto de ser parte de la mejor desición de tu vida

##En San Gaspar Club Campreste y de Golf estamos comprometidos con blablabla

###En unos momentos un ejecutivo se comunicara contigo para darte a conocer, los beneficios de ser **Socio Fundador**.

Gracias de parte de todo el equipo de<br>
##{{ config('app.name') }}
@endcomponent
