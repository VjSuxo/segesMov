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
        <div class="border">
            <a class="btn btn-primary  position-absolute top-10 start-50 translate-middle"  href="{{ url()->previous() }}">Regresasr</a>
        </div>
        <table class="mt-5 table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Accion</th>
                <th scope="col">Rol</th>
                <th scope="col">Fecha </th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($auditorias as $info)
                <tr>
                    <th scope="row">{{$info->id}}</th>
                    <td>{{$info->accion}} </td>
                    <td>{{$info->modelo}}</td>
                    <td>{{  \Carbon\Carbon::parse($info->created_at)->toDateString() }}</td>
                    <td>{{  \Carbon\Carbon::parse($info->created_at)->hour }} : {{ \Carbon\Carbon::parse($info->created_at)->minute }}</td>
                </tr>
              @endforeach

            </tbody>

          </table>

            {{ $auditorias->links('pagination.custom') }}


    </div>


</x-layouts>
