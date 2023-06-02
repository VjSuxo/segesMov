<x-layouts.app>
    @vite(['resources/css/style_cards.css','resources/css/style_ListaEstado.css','resources/css/style_controlador.css'])

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

.elementos{
    background: rgba(116,189,224,0.5);

}

.elementos img{
    margin: 10% 5% 5% 1%;
    max-width: 100%;
  height: auto;
}

.elementos input{
    background: rgba(161,225,250,0.5);
    border-radius: 15px;
    margin-bottom: 10px;
}

@media only screen and (max-width: 480px) {
    .elementos img {
        margin: 10% 5% 5% 1%;
      max-width: 5px;
      height: 5px;
    }
  }

    </style>

    <div class="contenedor">
        <div class="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <div class="">
                  <a class="nav-link" aria-current="page" href="{{  route('controlador.home') }}">Eventos</a>
                </div>
              </li>
              <li class="nav-item activado">
                <a class="nav-link" href="{{  route('controlador.ambientes') }}">Ambientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{  route('controlador.crearEvento') }}">Crear Evento</a>
            </li>
            </ul>
        </div>

        <div class="General border">
            <h1 class="titulo"> {{ $ambiente->nombre }} </h1>
            <div class="row align-items-start">
                <div class="col m-5 border">
                    <h1 class="titulo">Agenda</h1>
                    <table class="table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Año</th>
                            <th scope="col">Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ( $ambiente->temas as $tema )
                          <tr>
                            <th scope="row"> {{ $tema->id }} </th>
                            <td> {{$tema->hora_inicio}} {{$tema->hora_fin}} </td>
                            <td> {{
                                \Carbon\Carbon::parse($tema->fecha)->day
                              }}
                         <!--    {{
                                \Carbon\Carbon::parse($tema->fecha)->locale('es')->isoFormat('dddd')
                             }}  -->
                            </td>
                            <td>  {{ \Carbon\Carbon::parse($tema->fecha)->locale('es')->monthName }} </td>
                        <td>    {{ \Carbon\Carbon::parse($tema->fecha)->year }}</td>
                        <td>
                            @if (\Carbon\Carbon::parse($tema->hora_inicio)->hour > \Carbon\Carbon::parse($tema->hora_fin)->hour)
                                {{  \Carbon\Carbon::parse($tema->hora_inicio)->hour -
                                \Carbon\Carbon::parse($tema->hora_fin)->hour }}
                            @else
                            {{  \Carbon\Carbon::parse($tema->hora_fin)->hour -
                                \Carbon\Carbon::parse($tema->hora_inicio)->hour }}
                            @endif
                                horas

                        </td>

                          </tr>
                          @endforeach



                        </tbody>
                    </table>
                </div>

                <div class="col m-5 border d-flex flex-column align-items-center  informacionInfra" >
                    <h1 class="titulo">Ambiente</h1>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4 image">
                            <img src="/storage/imagenes/evento1.jpg" class="img-fluid" alt="...">
                          </div>
                          <div class="col-md-6">
                            <div class="card-body">
                              <h5 class="card-title">Caracteristicas</h5>
                              <ul class="list-group list-group-flush">
                                <div class="cuerpo">
                                    <li class="list-group-item"> Capacidad : {{ $ambiente->capacidad }}  </li>
                                    <br>
                                    <li class="list-group-item">Estado :  {{ $ambiente->estado }}</li>
                                    <br>
                                </div>
                            </ul>
                            </div>
                          </div>
                        </div>
                      </div>


                </div>

            </div>
            <a class="btn btn-primary position-absolute top-100 start-50 translate-middle"  href="{{ url()->previous() }}">Regresasr</a>
     </div>

    </div>
</x-layouts.app>
