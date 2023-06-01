<x-layouts.app>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/style_controlador.css'])
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.usuarios') }}">Usuarios</a>
          </li>
          <li class="nav-item activado">
            <a class="nav-link"  href="{{ route('admin.eventos') }}">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('admin.pagina_web') }}">Pagina Web</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{  route('admin.ambiente') }}">Ambiente</a>
          </li>
        </ul>
    </div>
    <div class="contenedor">
        <div class="contaniner General">

            <div class="parent">
                <div class="div1"> </div>
                <div class="div2">
                    <div class="contenido">
                        <form action=" {{ route('admin.eventoUp',$evento->id) }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Titulo</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="titulo" name="titulo" value="{{ $evento->nombre }} " >
                              </div>
                            <h1> </h1>
                            <div class="input-group">
                                <span class="input-group-text">Descripcion</span>
                                <textarea class="form-control" aria-label="With textarea" id="des" name="des">  {{ $evento->descripcion }} </textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">
                                Cambiar
                            </button>
                        </form>
                  </div>
                </div>
                <div class="div3">
                    <div class="card" style="width: 20rem;">
                        <img src=" {{ $evento->url }} " class="card-img-top" alt="foto del evento">
                        <form action="{{ route('admin.updateImagen',['evento' => $evento]) }}"method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <button type="submit" class="btn btn-primary">
                                Cambiar Imagen
                            </button>
                        </form>


                        <div class="card-body">
                          <div class="cb-Btn position-relative">
                            <a href=" {{ route('admin.finEdit', $evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
                                Finalizar
                            </a>
                        </div>
                          <div class="listaG border">
                            <h5>Detalle :</h5>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item lista">Cantidad Clases : {{ count( $evento->temas ) }} </li>
                              <li class="list-group-item lista">Fecha Inicio : {{  $evento->temas[0]->fecha  }} </li>
                              <li class="list-group-item lista">Fecha Fin : {{  $evento->temas[count( $evento->temas )-1]->fecha  }} </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="div4">
                    <div class="contenido">
                        <div id="miCarrusel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              @foreach ($evento->temas as $index => $tema)
                                  <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="card mb-3" style="max-width: 840px;">
                                        <div class="row g-0">
                                          <div class="col-md-4">

                                            <img src=" {{ $tema->expositor->url }} " class="img-fluid rounded-start" alt="...">
                                          </div>
                                          <div class="col-md-8">
                                            <div class="card-body">
                                                <h2 class="card-title">{{ $tema->expositor->usuario->name }}</h2>
                                                <p class="card-text">{{ $tema->expositor->biografia }}</p>
                                                <p class="card-text"> Email : {{ $tema->expositor->usuario->email }}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Siguiente</span>
                            </a>
                          </div>
                    </div>
                </div>

                <div class="div5">
                    <div class="cuerpo">
                            <h1>Contenido</h1>
                            <ol class="list-group list-group-numbered">

                                <a class="btn btn-primary" href=" {{ route('admin.agregarTema',['evento'=>$evento->id]) }} ">Editar temas</a>
                                @foreach ( $evento->temas as $tema )
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                        <div class="fw-bold"> {{ $tema->nombre }} </div>
                                        {{ $tema->expositor->usuario->name }} {{ $tema->expositor->usuario->apellido_Pat }} {{ $tema->expositor->usuario->apellido_Mat }}
                                        </div>
                                        <span class=" ">Fecha : {{ $tema->fecha }} <br> Hora: {{ $tema->hora_inicio }} </span>
                                    </li>
                                @endforeach

                            </ol>
                    </div>
                </div>

                <div class="div6">
                    <h1>Comentarios</h1>
                    <div class="comentarios">
                        <ul class="list-group">
                            @foreach ( $evento->comentario as $comentario )
                                <li class="list-group-item">
                                    {{ $comentario->participante->usuario->name }} :    {{ $comentario->contenido }}
                                 </li>
                            @endforeach
                        </ul>
                    </div>


                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Comentario" aria-label="Recipient's username" aria-describedby="button-addon2" name="comentario" id="comentario">
                            <textarea name="event" id="event" cols="30" rows="10" style="display: none"> {{ $evento->id }} </textarea>

                          </div>

                </div>
            </div>

        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</x-layouts.app>
