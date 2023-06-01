<x-layouts.app >
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{  route('expositor.home') }}">Eventos</a>
            </div>
          </li>
          <li class="nav-item activado">
            <a class="nav-link" href="{{  route('expositor.eventoIndex') }}">InformacionEvento</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{  route('expositor.eventoMaterial') }}">Material</a>
            </li>
        </ul>
      </div>
</x-layouts>
