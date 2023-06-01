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
        <form method="POST" action="{{ route('admin.userUp') }}">
        @csrf
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">CI</span>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" id="id" name="id" value=" {{ $usuario->id }} "  aria-describedby="basic-addon1">
        </div>
            <div class="input-group mb-3">

                <span class="input-group-text" id="basic-addon1">Nombre Completo</span>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" id="nombre" name="nombre" value=" {{ $usuario->name }} "  aria-describedby="basic-addon1">
                <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Username" id="apMat" name="apMat" value=" {{ $usuario->apellido_Mat }} "  aria-describedby="basic-addon1">
                <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Username" id="apPat" name="apPat" value=" {{ $usuario->apellido_Pat }} "  aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" id="correo" name="correo" value=" {{ $usuario->email }} "   aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Correo</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Genero</span>
                <select class="form-select form-control " id="genero" name="genero" name="rol" id="rol" aria-label="Default select example">
                    <option   selected  > {{ $usuario->genero }} </option>
                    @if( $usuario->genero == 'masculino'  )
                    <option  value="femenino">femenino</option>
                    <option  value="unicornio">unicornio</option>
                    @endif
                    @if( $usuario->genero == 'femenino'  )
                    <option  value="unicornio">unicornio</option>
                    <option  value="masculino">masculino</option>
                    @endif
                    @if( $usuario->genero == 'unicornio'  )
                    <option  value="femenino">femenino</option>
                    <option  value="masculino">masculno</option>
                    <option  value="1">usuario</option>
                    @endif
                </select>
            </div>
  
            <div class="input-group mb-3">
            <select class="form-select form-control " name="rol" id="rol" aria-label="Default select example">
                
                @if( $usuario->role == 'expositor'  )
                <option   selected value="3"  > {{ $usuario->role }} </option>
                <option  value="1">usuario</option>
                <option  value="2">controlador</option>
                <option  value="0">admin</option>
                @endif
                @if( $usuario->role == 'user'  )
                <option   selected value="1"  > {{ $usuario->role }} </option>
                <option  value="2">controlador</option>
                <option  value="3">expositor</option>
                <option  value="0">admin</option>
                @endif
                @if( $usuario->role == 'controlador'  )
                <option   selected value="2"  > {{ $usuario->role }} </option>
                <option  value="3">expositor</option>
                <option  value="0">admin</option>
                <option  value="1">usuario</option>
                @endif
                @if( $usuario->role == 'admin'  )
                <option   selected value="0"  > {{ $usuario->role }} </option>
                <option  value="1">controlador</option>
                <option  value="2">admin</option>
                <option  value="3">expositor</option>
                @endif

            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>
</x-layouts>
