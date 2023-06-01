<x-layouts.app>
    @vite(['resources/css/style_cards.css','resources/css/style_ListaEstado.css'])
    <div class="contenedor">
        <div class="navegadorUsuario">
          <ul class="nav nav-tabs">


            <li class="nav-item">
              <div >
                <a class="nav-link" aria-current="page" href="{{ route('controlador.home') }}">Infraestructura</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_horario') }}">Horario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_reservas_inscripcion') }}">Reservas | Inscripciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_asistencia') }}">Asistencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('controlador.evento_certificados') }}">Certificados</a>
              </li>
          </ul>
        </div>

        <div class="container General border">
            <h1 class="titulo">EVENTO 1</h1>

            <div class="listaEstado">
              <div class="form-check form-check-inline">
                <input class="form-check-input ocupado" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"> <p>OCUPADO</p> </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input reservado" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><p>RESERVADO</p></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input libre" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><p>LIBRE</p></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input mantenimiento" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><p>MANTENIMIENTO</p></label>
              </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card reservado" style="max-width: 18rem;">

                  <div class="card-body">
                      <h5 class="card-title">1</h5>
                      <button type="button" class="btn btn-secondary">Asignar</button>
                  </div>
                  </div>
              </div>

              <div class="col">
                  <div class="card libre" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">2</h5>
                        <button type="button" class="btn btn-secondary">Asignar</button>
                    </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card mantenimiento" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <button type="button" class="btn btn-secondary">Asignar</button>
                    </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card ocupado" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">4</h5>
                        <button type="button" class="btn btn-secondary">Asignar</button>
                    </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card libre" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">5</h5>
                        <button type="button" class="btn btn-secondary">Asignar</button>
                    </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card reservado"style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">6</h5>
                        <button type="button" class="btn btn-secondary">Asignar</button>
                    </div>
                  </div>
                </div>


            </div>
          </div>

    </div>
</x-layouts.app>
