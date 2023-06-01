<x-layouts.app>
    @vite(['resources/css/style_verCerti.css'])
    <div class="contenedor">
        <div class="navegadorUsuario">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.home') }}">Otros Eventos</a>
            </li>
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{ route('controlador.evento', $evento->id) }}">Informacion</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.evento_ResIns',$evento->id) }} ">Reservas | Inscripciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.evento_asistencia',$evento->id) }}">Asistencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link activado" href="{{ route('controlador.evento_certificados',['evento' => $evento->id]) }}">Certificados</a>
            </li>
          </ul>
        </div>

        <div class="content">

            <div class="parent">
                <div class="div1 border">
                    <div class="relleno">
                        <div class="cabezaCerti">
                            <h1>SEGES</h1>
                            <p> Identificador de Evento {{ $evento->id }} </p>
                        </div>
                        <div class="contenidoCerti">

                            <h1>CERTIFICADO DE FINALIZACIÓN</h1>
                            <p>Participo en el {{ $evento->tipo }} de:</p>
                            <h2 class="curso"> {{ $evento->nombre }} </h2>
                        </div>
                        <div class="pieCerti">
                            <h2> {{ $usuario->name }} {{ $usuario->apellido_Pat}} {{ $usuario->apellido_Mat }}</h2>
                            <h2> Fecha :  {{$evento->temas[count( $evento->temas )-1]->fecha  }} </h2>
                        </div>

                    </div>
                </div>
                <div class="div2">
                  <div class="rellenoInfo">
                    <h3>Destinatario de certificado:</h3>
                    <h5> {{ $usuario->name }} {{ $usuario->apellido_Pat}} {{ $usuario->apellido_Mat }} </h5>
                    <h3>Acerca del curso:</h3>
                    <img style="width: 18rem;" src="/storage/imagenes/fondo-Evento1.jpg" alt="card-img-top">
                    <h3> {{$evento->nombre}} </h3>


                  </div>
                </div>
                <div><a class="btn btn-primary" href="{{ route('controlador.evento_certificados',$evento->id) }}">Regresar</a></div>
                </div>

        </div>
    </div>
</x-layouts.app>
