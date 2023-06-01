<x-layouts.app >

    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.usuarios')}}">Usuarios</a>
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
    <div class="container General">
        <h2>Temas del Evento {{ $eventos->nombre }} </h2>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Regresar</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Hora Inicio</th>
                <th scope="col">Hora Fin</th>
                <th scope="col"> Ambiente</th>
              </tr>
            </thead>
            <tbody>

                @foreach ( $eventos->temas as $tema )
                    <tr>
                        <th scope="row">{{ $tema->id }}</th>
                        <th scope="row">{{ $tema->nombre }}</th>
                        <th scope="row">{{ $tema->descripcion }}</th>
                        <th scope="row">{{ $tema->hora_inicio }}</th>
                        <th scope="row">{{ $tema->hora_fin }}</th>
                        <th>
                            @foreach ( $tema->infraestructura as $infra )
                                @if ($infra->id != "")
                                    @foreach ( $ambientes as $ambiente )
                                        @if ($ambiente->id == $infra->ambiente_id)
                                            {{ $ambiente->nombre }}
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                        </th>
                    </tr>
                @endforeach

            </tbody>

          </table>
    </div>

</x-layouts>
