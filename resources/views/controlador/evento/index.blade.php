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

</style>
    <div class="contenedor">
        <div class="navegadorUsuario" id="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.home') }}">Otros Eventos</a>
              </li>
            <li class="nav-item">
              <div class="">
                <a class="nav-link activado" aria-current="page" href="#index">Informacion</a>
              </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="#inscripciones">Reservas | Inscripciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_asistencia',$evento->id) }}">Asistencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_certificados',$evento->id) }}">Certificados</a>
              </li>
            </ul>
          </div>
        <section id="index">
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
                                <a href=" {{ route('controlador.editarEvento',$evento->id) }} " class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">
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
        </section>
        <section id="inscripciones">
          <h1 style="color:white" class="mt-10" >Lista de inscritos </h1>
            @vite(['resources/css/style_inscritos.css','resources/css/style_ListaEstado.css'])

            <style>



.lado{
    display: flex;
    justify-content: space-between;
    margin-top: 3%;
}

.subTexto{
    color: white;
}

.botones{
    border: 1px solid white;
    padding: 15px;
    border-radius: 10px;
    width: 35%;
    height: 20%;
    margin-left: 1%;
}


.listaEstado{
    margin-left: 10%;
}

.card{
    width: 100%;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

}

.ocupado{
    background-color: rgb(183, 67, 67);

}

.reservado{
    background-color: rgb(134, 56, 134);
}

.libre{
    background-color: rgb(50, 157, 50);
}

.mantenimiento{
    background-color: rgb(202, 202, 46);
}

.btn{
    background-color: #4A8DB7;
    border-color: #4A8DB7;
    -webkit-box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
-moz-box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
}

.card-title{
    color: white;
    font-size: 20px;
}

            </style>
            <div class="contenedor">

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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
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
                        </div>
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
        </section>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</x-layouts.app>
