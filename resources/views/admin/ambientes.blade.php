<x-layouts.app >
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.usuarios')}}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('admin.eventos') }}">Eventos</a>
          </li>

          <li class="nav-item activado">
            <a class="nav-link"  href="{{  route('admin.ambiente') }}">Ambiente</a>
          </li>
        </ul>
    </div>
    <div class="container General  ">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $ambientes as $ambiente )
                    <tr>
                        <th scope="row"> {{$ambiente->id}} </th>
                        <td> {{ $ambiente->nombre }} </td>
                        <td> {{ $ambiente->capacidad }} </td>
                        <td> {{ $ambiente->estado}} </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</x-layouts>
