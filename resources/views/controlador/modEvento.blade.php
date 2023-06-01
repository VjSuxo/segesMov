<x-layouts.app >
    <div class="contenedor">
        <!-- Navegador-->
        <div class="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <div class="">
                  <a class="nav-link" aria-current="page" href="{{  route('controlador.home') }}">Eventos</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{  route('controlador.ambientes') }}">Ambientes</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{  route('controlador.crearEvento') }}">Crear Evento</a>
              </li>
            </ul>
        </div>
        <!-- Contenido -->

        <div class="cuerpo">
            <div class="container text-center">
                <div class="titulo">
                    <h1 class="elemento">Modificar Evento</h1>
                </div>

                <div class="row align-items-start">
                        <div class="col"></div>
                        <div class="col">
                            <h1>MODIFICAR TEMAS {{ $tema->nombre }}   </h1>
                           <form action="{{ route('controlador.updateTema',['evento' => $evento, 'tema'=> $tema]) }}"method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre Tema</span>
                                <input type="text" class="form-control" placeholder="nombre tema"
                                    id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1"
                                    value="{{ old('nombre',$tema->nombre) }}">
                              </div>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" name="expositor" id="inputGroupSelect01">
                                  <option selected>Selecciona un expositor</option>
                                  @foreach ( $expositores as $expositor )
                                  <option value="{{ $expositor->id }}">{{ $expositor->usuario->name}} {{ $expositor->usuario->apellido_Pat}} {{ $expositor->usuario->apellido_Mat}}</option>
                                  @endforeach

                                </select>
                              </div>

                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Infraestructura</label>
                                <select class="form-select" name="infra"  id="infraestructuraSelect" onchange="cargarAmbientes()">
                                    @foreach ( $ambientes as $ambiente )
                                    @if ($tema->ambiente_id == $ambiente->id )
                                    <option selected value="{{$ambiente->infraestructura_id}} "> {{ $ambiente->infraestructura->nombre }} </option>
                                    @endif
                                    @endforeach

                                  @foreach ( $infraestructuras as $infraestructura )
                                  <option value="{{ $infraestructura->id }}">{{ $infraestructura->nombre}}</option>
                                  @endforeach

                                </select>

                                <label class="input-group-text" for="inputGroupSelect01">Ambiente</label>
                                <select class="form-select" name="ambiente"  id="ambienteSelect" >
                                <option selected value="{{ $tema->ambiente_id }} ">
                                    @foreach ( $ambientes as $ambiente )
                                    @if ($tema->ambiente_id == $ambiente->id )
                                    {{ $ambiente->nombre }}
                                    @endif
                                    @endforeach
                                </option>
                                </select>
                              </div>

    <script>
        function guardarCambios() {
            var infraestructuraSelect = document.getElementById("infraestructuraSelect");
            var ambienteSelect = document.getElementById("ambienteSelect");
            var infraestructuraId = infraestructuraSelect.value;
            var ambienteId = ambienteSelect.value;

            // Enviar los datos al servidor para guardar los cambios utilizando AJAX o un formulario

            // Ejemplo de enviar mediante AJAX utilizando Axios
            axios.put('/infraestructuras/' + infraestructuraId, {
                ambiente_id: ambienteId
            }).then(function(response) {
                // Manejar la respuesta del servidor
                console.log(response.data);
            }).catch(function(error) {
                // Manejar el error
                console.error(error);
            });
        }
    </script>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" name="expositor" id="inputGroupSelect01">
                                  <option value="{{ $tema->expositor->id }}" selected> {{ $tema->expositor->usuario->name }} {{ $tema->expositor->usuario->apellido_Pat }} {{ $tema->expositor->usuario->apellido_Mat }} </option>
                                  @foreach ( $expositores as $expositor )
                                    @if ($expositor->id != $tema->expositor_id)
                                    <option value="{{ $expositor->id }}">{{ $expositor->usuario->name}} {{ $expositor->usuario->apellido_Pat}} {{ $expositor->usuario->apellido_Mat}}</option>
                                    @endif
                                  @endforeach

                                </select>
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text">Hora Inicio</span>
                                <input type="time" class="form-control" id="hI" name="hI" placeholder="" aria-label="Hora" value="{{ old('nombre',$tema->hora_inicio) }}">
                                <span class="input-group-text">Hora Fin</span>
                                <input type="time" class="form-control"  id="hF" name="hF" placeholder="" aria-label="Hora" value="{{ old('nombre',$tema->hora_fin) }}">
                                <span class="input-group-text">Fecha</span>
                                <input type="date" class="form-control"  id="fecha" name="fecha" placeholder="" aria-label="Fecha" value="{{ old('nombre',$tema->fecha) }}">
                              </div>

                              <div class="input-group">
                                <span class="input-group-text">Descripcion</span>
                                <textarea class="form-control" name="descripcion" id="descipcion" aria-label="With textarea" > {{ $tema->descripcion }} </textarea>
                              </div>

                              <button type="submit" class="btn btn-primary mt-5">Editar</button>
                           </form>
                        </div>
                        <div class="col"></div>
                    </div>
                </form>
              </div>
        </div>

    </div>
</x-layouts>
