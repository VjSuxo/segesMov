<x-layouts.app>
    <div class="contenedor">
        <div class="navegadorUsuario">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.home') }}">Otros Eventos</a>
            </li>
          <li class="nav-item">
            <div class="">
              <a class="nav-link " aria-current="page" href="{{ route('controlador.evento', $evento->id) }}">Informacion</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.evento_ResIns',$evento->id) }} ">Reservas | Inscripciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link activado" href="{{ route('controlador.evento_asistencia',$evento->id) }}">Asistencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('controlador.evento_certificados',$evento->id) }}">Certificados</a>
            </li>
          </ul>
        </div>
        <div class="container General">
            <table class="table-responsive">
                <thead>
                  <tr>
                    <th scope="col">CI</th>
                    <th scope="col">Nombra</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Marcar Asistencia</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $evento->asistencias as $asistencia )
                    <tr>
                        <th scope="row"> {{ $asistencia->participante->usuario->id }} </th>
                        <td> {{ $asistencia->participante->usuario->name }} </td>
                        <td> {{ $asistencia->participante->usuario->apellido_Pat }} {{ $asistencia->participante->usuario->apellido_Mat }} </td>
                        <td> {{ $asistencia->asistio }} </td>
                        <td> <a href=" {{ route('controlador.marcarAsis',['asistencia'=>$asistencia->id,'evento'=>$evento->id]) }} "> Marcar Asistencia </a> </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>






</x-layouts.app>
