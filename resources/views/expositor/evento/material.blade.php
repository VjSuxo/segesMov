<x-layouts.app >
    @vite(['resources/css/style_cardsMaterial.css','resources/css/style_inscritos.css'])
    <style>
        .card{
    background: rgba(43,113,151,0.7);
    border-radius: 15px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
}

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


    </style>
    <div class="contenedor">
        <div class="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <div class="">
                  <a class="nav-link" aria-current="page" href=" {{ route('expositor.Index') }} ">Temas</a>
                </div>
              </li>

              <li class="nav-item activado">
                  <a class="nav-link" href="{{  route('expositor.eventoMaterial',$tema->id) }}">Material</a>
                </li>
            </ul>
        </div>

        <div class="container General">
            <div class="botones lado">
                <h4 class="subTexto">Subir Material :</h4>
                <a type="button" href=" {{ route('expositor.subirMaterial',$tema->id) }} " class="btn btn-primary">Subir</a>
            </div>
          <div class="container General">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ( $contenidos as $contenido )
                    @if($tema->id == $contenido->tema_id)
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4 ">
                                <img src="/storage/icons/tarea.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">Material {{ $contenido->titulo }} </h5>
                                <p class="card-text"> {{ $contenido->descripcion }} </p>
                                <a href=" {{ $contenido->archivo }} " class="btn btn-primary">Ver</a>
                                <a href=" {{route('expositor.editarCont',['tema'=>$tema->id, 'contenido' => $contenido->id]) }} " class="btn btn-primary">Editar</a>
                                <form  class="mt-2" action="{{ route('expositor.eliminarCont', ['tema'=>$tema->id, 'contenido' => $contenido->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
          </div>

        </div>
        </div>

      </div>
</x-layouts>
