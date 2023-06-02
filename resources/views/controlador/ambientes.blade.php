<x-layouts.app>
    @vite(['resources/css/style_cards.css','resources/css/style_ListaEstado.css'])
    <style>

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
        <div class="container General border">
            <h1 class="titulo">INFRAESTRUCTURAS</h1>
            <a class="btn btn-primary" href="{{  route('controlador.crearInfra') }}">Crear Infraestructura</a>
            <a class="btn btn-primary" href="{{  route('controlador.crearAmbiente') }}">Crear Ambiente</a>
            <div class="table-responsive">
                <table class="table-responsive">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">DIRECCION</th>
                          <th scope="col">VER AMBIENTES</th>
                          <th scope="col">MODIFICAR</th>
                          <th scope="col">ELIMINAR</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $infras as $infra )
                            <tr>
                            <th scope="row">{{ $infra->id }}</th>
                            <td>{{ $infra->nombre }}</td>
                            <td>{{ $infra->direccion }}</td>
                            <td><a class="btn btn-primary" href="{{  route('controlador.indexAmb',['infraestructura' => $infra]) }}">Ver</a></td>
                            <td><a class="btn btn-primary" href="{{  route('controlador.editInfra',['infraestructura' => $infra]) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('controlador.eliminarInfra', ['infraestructura' => $infra->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                </table>
              </div>


        </div>

    </div>
    </div>
</x-layouts.app>
