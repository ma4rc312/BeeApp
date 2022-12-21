<link  href="{{asset('css/autenticacion.css')}}" rel="stylesheet">

<button class="fondo" {{ $attributes->merge(['type' => 'submit', 'class']) }}>
    {{ $slot }}
</button>
