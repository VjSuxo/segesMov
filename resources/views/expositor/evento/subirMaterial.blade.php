<x-layouts.app >
    <div class="contenedor">
        <!-- Navegador-->
        <div class="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <div class="">
                  <a class="nav-link" aria-current="page" href="{{ route('expositor.Index') }}">Tema</a>
                </div>
              </li>

              <li class="nav-item activado">
                  <a class="nav-link" href="{{  route('expositor.eventoMaterial',$tema->id) }}">Material</a>
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
                            <h1>AGREGAR CONTENIDO</h1>
                           <form action=" {{ route('expositor.createCont',$tema->id) }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Titulo</span>
                                <input type="text" class="form-control" placeholder="nombre titulo"
                                    id="titulo" name="titulo" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="archivo" id="archivo">
                            </div>

                              <div class="input-group">
                                <span class="input-group-text">Descripcion</span>
                                <textarea class="form-control" name="descripcion" id="descipcion" aria-label="With textarea"></textarea>
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
