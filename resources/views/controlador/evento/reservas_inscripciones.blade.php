<x-layouts.app>
    @vite(['resources/css/style_inscritos.css','resources/css/style_ListaEstado.css'])
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
                <a class="nav-link activado" href="{{ route('controlador.evento_ResIns',$evento->id) }} ">Reservas | Inscripciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_asistencia',$evento->id) }}">Asistencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_certificados',$evento->id) }}">Certificados</a>
              </li>
            </ul>
          </div>

        <div class="container General">
            <div class="listaEstado">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">  <a href=" {{ route('controlador.IR_Fil_Reserva',$evento->id) }} "  class="btn btn-primary"> <p>RESERVAS</p>  </a> </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2"><a href=" {{ route('controlador.IR_Fil_Ins',$evento->id) }} "  class="btn btn-primary"> <p>INSCRIPCION</p>  </a></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2"><a href=" {{ route('controlador.IR_Fil_Todo',$evento->id) }} "  class="btn btn-primary"> <p>TODO</p>  </a></label>
                  </div>
            </div>

            <div class="lado">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">CI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Estado</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $evento->eventoParticipante as $participante )
                        <tr>
                            <th scope="row"> {{ $participante->participante->usuario->id }} </th>
                            <td>{{ $participante->participante->usuario->name }} </td>
                            <td>{{ $participante->participante->usuario->apellido_Pat }} {{ $participante->participante->usuario->apellido_Mat }} </td>
                            <td>{{ $participante->participante->usuario->email }} </td>
                            <td>
                                @if ($participante->inscrito == 1)
                                    Inscrito
                                @endif
                                @if ($participante->reservado == 1)
                                    Reservado
                                @endif
                            </td>

                        </tr>
                        @endforeach


                    </tbody>
                  </table>
                <div class="botones">
                    @if ( $evento->estado == 0 )
                    <div class="lado">
                        <h4 class="subTexto">Reserva :</h4>
                    <a type="button" class="btn btn-primary" href="{{ route('controlador.desRes',$evento->id) }}">Finalizar </a>
                    </div>
                    @endif
                    @if ($evento->estado == 1 )
                    <div class="lado">
                        <h4 class="subTexto">Inscripcion :</h4>
                    <a type="button" class="btn btn-primary" href="{{ route('controlador.desIns',$evento->id) }}">Finalizar </a>
                    </div>
                    @endif
                    @if ($evento->estado == 2 )
                    <div class="lado">
                        <h4 class="subTexto">Evento en curso</h4>

                    </div>
                    <a type="button" class="btn btn-primary" href=" {{ route('controlador.activarIns',$evento->id) }}"">Activar </a>
                    @endif


                </div>
            </div>

            </div>
    </div>
</x-layouts.app>
