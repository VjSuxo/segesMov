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
                    <h1 class="elemento">Crear Evento</h1>
                </div>

                <div class="row align-items-start">
                        <div class="col">
                            <h1>TEMAS</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Hora Inicio</th>
                                        <th scope="col">Hora Fin</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Expositor</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($evento->temas as $tema)
                                        <tr>
                                          <th scope="row"> {{ $tema->id }} </th>
                                          <td> {{ $tema->nombre }} </td>
                                          <td> {{ $tema->descripcion }} </td>
                                          <td> {{ $tema->hora_inicio }} </td>
                                          <td> {{ $tema->hora_fin }} </td>
                                          <td> {{ $tema->fecha }} </td>
                                          <td> {{ $tema->expositor->usuario->name }} </td>
                                          <td><a  href="{{ route('controlador.modTema',['evento'=>$evento->id,'tema'=>$tema->id]) }}" class="btn btn-primary">Modificar </a></td>
                                        </tr>
                                      @endforeach


                                    </tbody>
                                  </table>
                            </div>
                        </div>
                        <div class="col">
                            <h1>AGREGAR TEMAS</h1>
                           <form action="{{ route('controlador.genTema',$evento->id) }}"method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre Tema</span>
                                <input type="text" class="form-control" placeholder="nombre tema"
                                    id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1">
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
                                  <option selected>Selecciona una infraestructura</option>
                                  @foreach ( $infraestructuras as $infraestructura )
                                  <option value="{{ $infraestructura->id }}">{{ $infraestructura->nombre}}</option>
                                  @endforeach

                                </select>

                                <label class="input-group-text" for="inputGroupSelect01">Ambiente</label>
                                <select class="form-select" name="ambiente"  id="ambienteSelect" >
                                  <option selected>Selecciona un ambiente</option>
                                </select>
                              </div>
                              <script>
                                var ambientes = @json($ambientes);

                                function cargarAmbientes() {
                                    var infraestructuraSelect = document.getElementById("infraestructuraSelect");
                                    var ambienteSelect = document.getElementById("ambienteSelect");
                                    var infraestructuraId = infraestructuraSelect.value;
                                    ambienteSelect.innerHTML = "";

                                    if (infraestructuraId !== "") {
                                        var ambientesInfraestructura = ambientes.filter(function(ambiente) {
                                            return ambiente.infraestructura_id == infraestructuraId;
                                        });

                                        ambientesInfraestructura.forEach(function(ambiente) {
                                            var option = document.createElement("option");
                                            option.text = ambiente.nombre;
                                            option.value = ambiente.id;
                                            ambienteSelect.appendChild(option);
                                        });
                                    }
                                }
                            </script>

                              <div class="input-group mb-3">
                                <span class="input-group-text">Hora Inicio</span>
                                <input type="time" class="form-control" id="hI" name="hI" placeholder="" aria-label="Hora">
                                <span class="input-group-text">Hora Fin</span>
                                <input type="time" class="form-control"  id="hF" name="hF" placeholder="" aria-label="Hora">
                                <span class="input-group-text">Fecha</span>
                                <input type="date" class="form-control"  id="fecha" name="fecha" placeholder="" aria-label="Fecha">
                              </div>

                              <div class="input-group">
                                <span class="input-group-text">Descripcion</span>
                                <textarea class="form-control" name="descripcion" id="descipcion" aria-label="With textarea"></textarea>
                              </div>

                              <button type="submit" class="btn btn-primary mt-5">Agregar</button>
                              <a href="{{  route('controlador.home') }}" class="btn btn-primary mt-5">Finalizar</a>
                           </form>
                        </div>
                    </div>
                </form>
              </div>
        </div>

    </div>
</x-layouts>
