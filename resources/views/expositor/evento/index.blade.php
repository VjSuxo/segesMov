<x-layouts.app >
  @vite(['resources/css/style_expositor.css'])
    <div class="contenedor">
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
        <div class="container border bloques">
            <button type="button" class="btn btn-primary">Edtiar</button>
          <div class="parent">
            <div class="div1">

            </div>
            <div class="div2">
              <div class="contenido">
                    <h1>Lorem Ipsun Dolor Is Amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ea natus harum magnam tempora sequi a expedita labore minus doloribus incidunt alias quae maxime ad voluptatum saepe, iure vero quo!</p>

              </div>
            </div>
            <div class="div3">
              <div class="card" style="width: 18rem;">
                <img src="/storage/imagenes/fondo-Evento1.jpg" class="card-img-top" alt="foto del evento">
                <div class="card-body">
                  <div class="cb-Btn position-relative">
                    <a href="#" class=" position-absolute top-100 start-50 translate-middle mt-1 btn btn-primary">Inscribirme</a>
                  </div>
                  <div class="listaG border">
                    <h5>Incluye :</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item lista">An item   </li>
                      <li class="list-group-item lista">A second item</li>
                      <li class="list-group-item lista">A third item</li>
                      <li class="list-group-item lista">A fourth item</li>
                      <li class="list-group-item lista">And a fifth one</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="div4">
              <div class="contenido">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="/storage/icons/icon_user.png" class="bordeImg img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h4 class="card-title">Nombre Expositor</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class=" btn btn-primary">Ver Informaicons</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cuerpo">
                    <h1>Preguntas Frecuentes</h1>
                </div>
              </div>
            </div>
            <div class="div5">
                <h1>Comentarios</h1>
                <div class="comentarios">
                    <ul class="list-group">
                        <li class="list-group-item">Duracion ":</li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                    <button type="button" class="btn btn-primary">Ver mas</button>
                </div>

            </div>
          </div>

        </div>


      </div>
</x-layouts>
