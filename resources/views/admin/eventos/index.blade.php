<x-layouts.app>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/style_controlador.css'])
    <style>

.informacion{
    -webkit-box-shadow: 0px 0px 5px 0px rgba(255,255,255,1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(255,255,255,1);
    box-shadow: 0px 0px 5px 0px rgba(255,255,255,1);
    height: 70vh;


}

iframe{
    width: 100%;
    height: 100%;
}


.informacion .navegador {
    position: fixed;
    top: 0;
  }


  .parent {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    grid-template-rows: repeat(10, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 5 / 11;
        margin-top: 20px;
        border-radius: 15px;
        height: 50%;
        background: rgba(116, 189, 224, 1);
    }
    .div2 { grid-area: 1 / 1 / 5 / 7; }
    .div2 .contenido{
        margin-top: 50px;
        margin-left: 50px;
    }
    .div3 { grid-area: 2 / 8 / 7 / 11;
        margin-right: 20px;

    }
    .div3 .card{
        margin-left: 20%;
        border-radius: 10px;

        background: rgba(161, 225, 250, 1);
    }
    .div3 .cb-Btn{
        margin-top: 10px;
        margin-bottom: 55px;

    }

    .div3 .btn{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    .div3 .listaG{
        border-radius: 15px;
        padding: 20px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    .div3 .lista{
        background: rgba(161, 225, 250, 1);
    }

    .div4 { grid-area: 5 / 1 / 8 / 6;
    }
    .div4 .contenido{
        margin-top: -20%;
    }

    .div4 .contenido .card{
        background: rgba(116, 189, 224, 0.1);
        padding: 10px;
        margin-left: 55px;
    }

    .div4 .contenido .card  h2{
        color: white;
    }

    .div4 .bordeImg{
        border: 1px solid white;
        border-radius: 30%;
    }

    .div5 { grid-area: 6 / 1 / 9 / 6;

        margin-left: 10px;
        margin-bottom: 10px;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,0.4542191876750701) 0%, rgba(28,28,28,0.27494747899159666) 100%);
    }
    .div5 h1{
        color: white;
    }


    .div6 { grid-area: 6 / 7 / 11 / 11;
        margin-top: 80px;
        margin-right: 20px;
        padding: 10px;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,0.4542191876750701) 0%, rgba(28,28,28,0.27494747899159666) 100%);   }
    .div6 h1{
        color: white;
    }

    .div6 .btn{
        margin-top: 20px;
        margin-left: 40%;
    }
    .div6 .comentarios{
    }
    .div6 .list-group{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    .div6 .list-group-item{
        background: rgba(161, 225, 250, 1);
        border: 7;
        border-color: white;
    }

    @media (max-width: 600px) {
  .parent {
    grid-template-columns: 1fr;
    grid-template-rows: auto;
  }

  .div1,
  .div2,
  .div3,
  .div4,
  .div5,
  .div6 {
    grid-area: auto;
    margin-top: 15px;
    margin-bottom: 5px
  }

}


    </style>
    <div class="contenedor">
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
                            <a href=" {{ route('admin.editarEvento',$evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
                                Editar
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
