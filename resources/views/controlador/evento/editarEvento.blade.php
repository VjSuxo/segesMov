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
        <div class="contaniner General">
            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                    <h1>INFORMACION</h1>
                    <form action=" {{ route('controlador.eventoUp',$evento->id) }} " method="POST" enctype="multipart/form-data">
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
                        <img src=" {{ $evento->url }} " class="card-img-top" alt="foto del evento">
                        <form action="{{ route('controlador.updateImagen',['evento' => $evento]) }}"method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <button type="submit" class="btn btn-primary">
                                Cambiar Imagen
                            </button>
                        </form>
                  </div>
                  <div class="col">

                    <div class="cuerpo mt-5">
                        <h1>Contenido</h1>
                        <ol class="list-group list-group-numbered">

                            <a class="btn btn-primary" href=" {{ route('controlador.agregarTema',['evento'=>$evento->id]) }} ">Editar temas</a>
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
                  <div class="col">
                    <h1>FINALIZAR</h1>
                    <a href=" {{ route('controlador.finEdit', $evento->id) }} " class="mt-5 btn btn-primary">
                        Finalizar
                    </a>
                  </div>
                </div>
              </div>
        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</x-layouts.app>
