<x-layouts.app >
  @vite(['resources/css/style_expositor.css'])
  <style>
    .parent {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }

    .div1 {
        margin-top: 20px;
        grid-area: 1 / 1 / 3 / 6;
        border-radius: 15px;
        background: rgba(116, 189, 224, 1);
    }
    .div2 { grid-area: 1 / 1 / 4 / 4; }
        .div2 .contenido{
            margin-top: 50px;
            margin-left: 50px;
        }
    .div3 {
        grid-area: 2 / 5 / 5 / 5;

        background: rgba(161, 225, 250, 0.9);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        margin-right: 20px;
    }

    .div3 .card{
        border-radius: 10px;

        background: rgba(161, 225, 250, 0.10);
    }

    .div3 .cb-Btn{
        margin-top: 10px;
        margin-bottom: 55px;

    }

    .div3 .btn{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }

    .div3 .listaG{
        border-radius: 15px;
        padding: 20px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }

    .div3 .lista{
        background: rgba(161, 225, 250, 1);
    }

    .div4 { grid-area: 3 / 1 / 7 / 4; }

    .div4 .contenido{
        margin-top: 10px;
    }

    .div4 .contenido .card{
        background: rgba(116, 189, 224, 0.1);
        padding: 10px;
    }

    .div4 .contenido .card  h4{
        color: white;
    }

    .div4 .bordeImg{
        border: 1px solid white;
        border-radius: 30%;
    }

    .div5{
        margin-top: 20px;
        margin-left: 60px;
        margin-right: 12px;
        grid-area: 3 / 3 / 5 / 5;
        padding: 20px;
        border-radius: 15px;
        background: rgba(161, 225, 250, 0.5);
    }

    .div5 h1{
        color: white;
    }

    .div5 .btn{
        margin-top: 20px;
        margin-left: 40%;
    }
    .div5 .comentarios{
    }
    .div5 .list-group{
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
    .div5 .list-group-item{
        background: rgba(161, 225, 250, 1);
        border: 7;
        border-color: white;
    }

  </style>
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
