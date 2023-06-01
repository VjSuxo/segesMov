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
              <li class="nav-item activado">
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

                        </div>

                        <div class="col">
                            <form action=" {{ route('controlador.genEve') }} " method="POST" enctype="multipart/form-data">
                                @csrf
                                Datos Generales
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nombre</span>
                                    <input id="nombre" name="nombre"  type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text"></span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Descripcion</span>
                                    <input  id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Username" aria-label="Username">

                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                    <select class="form-select" id="tipo" name="tipo" >
                                    <option selected>Seleccione un tipo de evento</option>
                                    <option value="tutorial">Tutorial</option>
                                    <option value="conferencia">Conferencia</option>
                                    <option value="mesa redonda">Mesa Redonda</option>
                                    <option value="presentacion proyectos">Presentacion Proyectos</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" accept="image/*" id="imagen" name="imagen">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    <br>
                                    @error('imagen')
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Generar</button>
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
