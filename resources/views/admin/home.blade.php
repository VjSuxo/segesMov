<x-layouts.app >
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="activado">
              <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.usuarios') }}">Usuarios</a>
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
        <h1>ADMINISTRADOR</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="/storage/icons/icon_Usuario.png" class="card-img-top" alt="imagen usuario">
              <div class="card-body">
                <a href="{{ route('admin.usuarios') }}"><h5 class="card-title">USUARIOS</h5></a>
              </div>

            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/storage/icons/icon_evento.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('admin.eventos') }}"><h5 class="card-title">EVENTOS</h5></a>
              </div>

            </div>

          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/storage/icons/diseno-web.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('admin.pagina_web') }}"><h5 class="card-title">PAGINA WEB</h5></a>
              </div>

            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/storage/icons/colegio.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('admin.ambiente') }}"><h5 class="card-title">AMBIENTES</h5></a>
              </div>

            </div>
          </div>
        </div>
      </div>

</x-layouts>
