<x-layouts.app >
    @vite(['resources/css/style_usuario.css'])
    <div class="navegadorUsuario">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <div class="">
              <a class="nav-link" aria-current="page" href="{{  route('expositor.home') }}">Perfil</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{  route('user.misEventos') }}">Mis Eventos</a>
          </li>
          <li class="nav-item activado">
              <a class="nav-link" href="">Crear evento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Gestionar evento</a>
          </li>
        </ul>
    </div>
    <div class="cuerpo">
        <div class="tarjeta">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="/storage/icons/icon_user.png" class="bordeImg img-thumbnail rounded-start" alt="">
                    <div class="contenedor-card">
                        <ul class="lista">
                            <li class="lista-Active">
                                <h3>Mi Perfil</h3>
                            </li>
                            <li>
                                <h3>Fotografia</h3>
                            </li>
                            <li>
                                <h3>Seguridad Cuenta</h3>
                            </li>
                            <li>
                                <h3>Cerrar Sesion</h3>
                            </li>
                        </ul>
                    </div>

                </div>
              </div>
        </div>
        <div class="informacion">
            <div class="titulo">
                <h1 class="elemento">Crear Evento</h1>
            </div>

            <form action=" {{ route('user.storeEvento') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container text-center">
                    <div class="row align-items-start">
                      <div class="col">
                        Datos Generales
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre</span>
                            <input id="nombre" name="nombre"  type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text"></span>
                        </div>

                          <div class="input-group mb-3">
                            <span class="input-group-text">Descripcion</span>
                            <input  id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Username" aria-label="Username">

                          </div>
                      </div>
                      <div class="col">
                        Expositores
                        <br>
                        <script>
                            function agregarInput() {
                                var contador = document.getElementsByTagName("input").length;
                                var nuevoInput = document.createElement("input");
                                nuevoInput.setAttribute("type", "text");
                                nuevoInput.setAttribute("class", "form-control");
                                nuevoInput.setAttribute("id", "expo-" + contador);
                                nuevoInput.setAttribute("name", "expo-" + contador);
                                nuevoInput.setAttribute("list", "datalistOptions");
                                nuevoInput.setAttribute("placeholder", "Type");
                                document.getElementById("contenedor-inputs").appendChild(nuevoInput);
                            }
                        </script>
                        <a class="btn btn-primary" onclick="agregarInput()">Agregar Input</a>
	                    <div id="contenedor-inputs">

                        <datalist id="datalistOptions">
                        @foreach ( $expositores as $expositor )
                            <option value=" {{ $expositor->usuario->name }} ">
                        @endforeach
                        </datalist>
                        </div>
                      </div>
                      <div class="col">
                        Datos Especificos

                        <select class="form-select" name="tipo" id="tipo" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">tutorial</option>
                            <option value="2">conferencia</option>
                            <option value="3">mesa redonda</option>
                            <option value="4">presentacion de proyectos</option>
                          </select>

                        <button class="btn btn-outline-secondary"  type="submit" id="boton-enviar" >Enviar</button>
                      </div>
                    </div>
                  </div>


            </form>



            </div>
        </div>
    </div>


</x-layouts>
