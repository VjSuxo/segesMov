<x-layouts.app >
    @vite(['resources/css/style_usuario.css'])
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="activado">
              <a class="nav-link" aria-current="page" href="{{  route('user.home') }}">Perfil</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  route('user.misEventos') }}">Mis Eventos</a>
          </li>
        </ul>
    </div>
    <div class="cuerpo">
        <div class="tarjeta">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="/storage/icons/icon_user.png" class="bordeImg img-thumbnail rounded-start" alt="">
                    <div class="contenedor-card">
                    <a class="nav-link" href="{{  route('user.misEventos') }}">Mis Eventos</a>
                    </div>

                </div>
              </div>
        </div>
        
            
        
    </div>


</x-layouts>
