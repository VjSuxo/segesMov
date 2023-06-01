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
                    <h1 class="elemento">Crear Ambiente</h1>
                </div>

                <div class="row align-items-start">
                        <div class="col">

                        </div>
                        <div class="col">
                           <form action=" {{ route('controlador.sotreAmbiente') }} "method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre</span>
                                <input type="text" class="form-control" placeholder="nombre"
                                    id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Capacidad</span>
                                <input type="number" class="form-control" placeholder="0"
                                    id="capacidad" name="capacidad" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Infraestructura</label>
                                <select class="form-select" id="inputGroupSelect01" name="infra">
                                  <option selected>Seleccione infraestructura</option>
                                  @foreach ( $infraestructuras as $infra )
                                    <option value=" {{ $infra->id }} " > {{ $infra->nombre }} </option>
                                  @endforeach
                                </select>
                              </div>
                            <button type="submit" class="btn btn-primary mt-5">Agregar</button>
                           </form>
                        </div>

                        <div class="col">

                        </div>
                    </div>
                </form>
              </div>
        </div>

    </div>
</x-layouts>
