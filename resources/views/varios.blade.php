
@foreach ( $info as $infoitem )
    <p> {{ $infoitem->nombre }} , {{ $infoitem->descripcion }} </p>
    
@endforeach

