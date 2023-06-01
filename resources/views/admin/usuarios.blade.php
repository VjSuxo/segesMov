<x-layouts.app >
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
            </div>
          </li>
          <li class="nav-item activado">
            <a class="nav-link" href="{{ route('admin.usuarios')}}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('admin.eventos') }}">Eventos</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link"  href="{{  route('admin.ambiente') }}">Ambiente</a>
          </li>
        </ul>
    </div>
    <div class="container General">
        <a class="btn btn-primary" href="{{  route('admin.crearUsuario') }}">Crear Usuario</a>
        <form action="{{ route('usuarios.buscar') }}" method="GET">
            <input type="text" name="query" placeholder="Buscar usuarios...">
            <button type="submit">Buscar</button>
        </form>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">CI</th>
                <th scope="col">Role</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Genero</th>
                <th scope="col">Modificar</th>
                <th scope="col">Historial</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->role}} </td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->apellido_Pat}} {{$usuario->apellido_Mat}} </td>
                    <td>{{$usuario->anio_Nac}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->genero}}</td>
                    <td> <a class="btn btn-primary" href="{{ route('admin.userUpdate',$usuario->id) }}">Modificar</a></td>
                    <td> <a class="btn btn-primary" href="{{ route('admin.usuariosHistorial',$usuario->id) }}">Ver</a> </td>
                    <td>
                      <form action="{{ route('usuarios.eliminar', ['usuario' => $usuario->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                      </form>
                    </td>
                </tr>
              @endforeach
              {{ $usuarios->links('pagination.custom') }}
            </tbody>
          </table>
    </div>
</x-layouts>
