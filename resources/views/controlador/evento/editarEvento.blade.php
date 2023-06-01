<x-layouts.app>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/style_controlador.css'])
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
