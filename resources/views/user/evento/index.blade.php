<x-layouts.app>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/style_controlador.css'])
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{  route('user.home') }}">Perfil</a>
            </div>
          </li>
          <li class="nav-item activado">
            <a class="nav-link" href="{{  route('user.misEventos') }}">Mis Eventos</a>
          </li>
        </ul>
    </div>
    <div class="contenedor">
        <div class="contaniner General">

            <div class="parent">
                <div class="div1"> </div>
                <div class="div2">
                    <div class="contenido">
                        <h1> {{ $evento->nombre }} </h1>
                        <p> {{ $evento->descripcion }} </p>

                  </div>
                </div>
                <div class="div3">
                    <div class="card" style="width: 20rem;">
                        <img src=" {{ $evento->url }} " class="card-img-top" alt="foto del evento">
                        <div class="card-body">
                          <div class="cb-Btn position-relative">
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary" href="{{ route('login') }}">  Inscribete</a>
                                </li>

                            @endif

                            @else
                                @foreach ( $evento->eventoParticipante as $eventoParticipante)
                                    @if ( $eventoParticipante->participante->usuario->id == Auth::user()->id )
                                        @if($eventoParticipante->inscrito == 1 )

                                            <li class="nav-item dropdown">
                                                <a href=" {{ route('user.evento-material',$evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
                                                        Material
                                                </a>
                                            </li>
                                        @endif
                                        @if($eventoParticipante->inscrito == 0 )
                                            <li class="nav-item dropdown">
                                                <a href=" {{ route('registro',$evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
                                                    Inscribirse
                                                </a>
                                            </li>
                                        @endif

                                    @endif
                                @endforeach
                                @if(empty($eventoParticipante ) )
                                    <li class="nav-item dropdown">
                                        <a href=" {{ route('registro',$evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
                                                Inscribirse
                                        </a>
                                    </li>
                                @endif

                        @endguest

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
                    <form action=" {{ route('user.crearComentario') }} "  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Comentario" aria-label="Recipient's username" aria-describedby="button-addon2" name="comentario" id="comentario">
                            <textarea name="event" id="event" cols="30" rows="10" style="display: none"> {{ $evento->id }} </textarea>
                            <button class="btn btn-outline-secondary"  type="submit" id="boton-enviar" >Enviar</button>
                          </div>
                    </form>
                </div>
            </div>

        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</x-layouts.app>
