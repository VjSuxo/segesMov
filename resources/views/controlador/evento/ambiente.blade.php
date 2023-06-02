<x-layouts.app>
    @vite(['resources/css/style_cards.css','resources/css/style_ListaEstado.css'])

    <style>
        .listaEstado{
    margin-left: 10%;
}

.card{
    width: 100%;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

}

.ocupado{
    background-color: rgb(183, 67, 67);

}

.reservado{
    background-color: rgb(134, 56, 134);
}

.libre{
    background-color: rgb(50, 157, 50);
}

.mantenimiento{
    background-color: rgb(202, 202, 46);
}

.btn{
    background-color: #4A8DB7;
    border-color: #4A8DB7;
    -webkit-box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
-moz-box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
box-shadow: 10px 10px 9px 0px rgba(0,0,0,0.67);
}

.card-title{
    color: white;
    font-size: 20px;
}

.elementos{
    background: rgba(116,189,224,0.5);

}

.elementos img{
    margin: 10% 5% 5% 1%;
    max-width: 100%;
  height: auto;
}

.elementos input{
    background: rgba(161,225,250,0.5);
    border-radius: 15px;
    margin-bottom: 10px;
}

@media only screen and (max-width: 480px) {
    .elementos img {
        margin: 10% 5% 5% 1%;
      max-width: 5px;
      height: 5px;
    }
  }
    </style>

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
