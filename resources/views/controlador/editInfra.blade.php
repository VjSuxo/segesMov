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
                    <h1 class="elemento">Editar Infraestrucura {{ $infraestructura->nombre }} </h1>
                </div>

                <div class="row align-items-start">
                        <div class="col">

                        </div>
                        <div class="col">
                            <h1></h1>
                           <form action=" {{ route('controlador.updateInfra', $infraestructura->id ) }} "method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre</span>
                                <input type="text" class="form-control" placeholder="nombre"
                                    id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1" value=" {{ $infraestructura->nombre }} ">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Direccion</span>
                                <input type="text" class="form-control" placeholder="nombre tema"
                                    id="direccion" name="direccion" aria-label="Username" aria-describedby="basic-addon1"  value=" {{ $infraestructura->direccion }} ">
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Actualizar</button>
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
