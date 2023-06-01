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
            <h1 class="titulo">{{ $infra->nombre }} </h1>
            <a class="btn btn-primary" href="{{  route('controlador.crearAmbiente2',['infraestructura'=>$infra->id]) }}">Crear Ambiente</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">CAPACIDAD</th>
                          <th scope="col">VER AMBIENTES</th>
                          <th scope="col">MODIFICAR</th>
                          <th scope="col">ELIMINAR</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $ambientes as $ambiente )
                            <tr>
                            <th scope="row">{{ $ambiente->id }}</th>
                            <td>{{ $ambiente->nombre }}</td>
                            <td>{{ $ambiente->capacidad }}</td>
                            <td><a class="btn btn-primary" href="{{  route('controlador.ambientesInfo',['ambiente' => $ambiente->id]) }}">Ver</a></td>
                            <td><a class="btn btn-primary" href="{{  route('controlador.editarAmbiente',['ambiente' => $ambiente->id,'infraestructura' => $infra->id]) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('controlador.eliminarAmb', ['ambiente'=>$ambiente->id, 'infraestructura' => $infra->id]) }}" method="POST">
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
