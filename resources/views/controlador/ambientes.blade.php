<x-layouts.app>
    @vite(['resources/css/style_cards.css','resources/css/style_ListaEstado.css'])
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
                <table class="table">
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
