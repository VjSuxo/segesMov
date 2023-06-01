<x-layouts.app>
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

        <div class="container General">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">CI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Asistencias</th>
                    <th scope="col">Generar Certificado</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $evento->asistencias as $asistencias )
                        <tr>
                            <th scope="row"> {{ $asistencias->participante->usuario->id }} </th>
                            <td> {{ $asistencias->participante->usuario->name }} </td>
                            <td> {{ $asistencias->participante->usuario->apellido_Pat }} {{ $asistencias->participante->usuario->apellido_Mat }} </td>
                            <td>{{ $asistencias->participante->usuario->email }}</td>
                            <td>{{ $asistencias->asistio }}</td>
                            <th scope="col"> <a href="{{ route('controlador.GenerarPDF', ['usuario' => $asistencias->participante->usuario->id, 'evento' => $evento->id] ) }}"> Ver</a> </th>
                          </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</x-layouts.app>
