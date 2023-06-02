<x-layouts.app >
    @vite(['resources/css/style_usuario.css'])
    <style>
        .cuerpo{
    display: flex;
    margin: 50px;
}

.informacion{
    margin-left: 15%;
    color: white;
    border: solid;
    padding: 50px;
}

.informacion .titulo{
    display: flex;
    justify-content: center; /* Para centrar horizontalmente */
    align-items: flex-start; /* Para alinear en la parte superior */
}



.formu{

    padding: 20px;
    align-items: center;
    display: flex;
    justify-content: center;
    min-height: 50vh;
    background-size: cover;
    background-position: center;
}

.formulario{
    display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 20px;
}

.formulario__label {
	display: block;
	font-weight: 700;
	padding: 10px;
	cursor: pointer;
    color: #fff ;
}

.formulario__grupo-input {
	position: relative;
}

.formulario__input {
	width: 100%;
	background: #fff;
	border: 3px solid transparent;
	border-radius: 3px;
	height: 45px;
	line-height: 45px;
	padding: 0 40px 0 10px;
	transition: .3s ease all;
}

.formulario__input:focus {
	border: 3px solid #0075FF;
	outline: none;
	box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
}

.formulario__input-error {
	font-size: 12px;
	margin-bottom: 0;
	display: none;
    color: #fff;
}

.formulario__input-error-activo {
	display: block;
}

.formulario__validacion-estado {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 0;
}

.formulario__checkbox {
	margin-right: 10px;
}

.formulario__grupo-terminos,
.formulario__mensaje,
.formulario__grupo-btn-enviar {
	grid-column: span 2;
}

.formulario__mensaje {
	height: 45px;
	line-height: 45px;
	background: #F66060;
	padding: 0 15px;
	border-radius: 3px;
	display: none;
}

.formulario__mensaje-activo {
	display: block;
}

.formulario__mensaje p {
	margin: 0;
}

.formulario__grupo-btn-enviar {
	display: flex;
	flex-direction: column;
	align-items: center;
}

.formulario__btn {
	height: 45px;
	line-height: 45px;
	width: 30%;
	background: #2B7197;;
	color: #fff;
	font-weight: bold;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	transition: .1s ease all;
}

.formulario__btn:hover {
	box-shadow: 3px 0px 30px rgba(163,163,163, 1);
}

.formulario__mensaje-exito {
	font-size: 14px;
	color: #fff;
	display: none;
}

.formulario__mensaje-exito-activo {
	display: block;
}

/* ----- -----  Estilos para Validacion ----- ----- */
.formulario__grupo-correcto .formulario__validacion-estado {
	color: #1ed12d;
	opacity: 1;
}

.formulario__grupo-incorrecto .formulario__label {
	color: #bb2929;
}

.formulario__grupo-incorrecto .formulario__validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario__grupo-incorrecto .formulario__input {
	border: 3px solid #bb2929;
}


/* ----- -----  Mediaqueries ----- ----- */
@media screen and (max-width: 800px) {
	.formulario {
		grid-template-columns: 1fr;
	}

	.formulario__grupo-terminos,
	.formulario__mensaje,
	.formulario__grupo-btn-enviar {
		grid-column: 1;
	}

	.formulario__btn {
		width: 100%;
	}
}


.card{
    background: rgba(116,189,224,0.9);
    border-radius: 15px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
}

.card .bordeImg{
    max-width: 100%;
    border-radius: 40px;
}

.contenedor-card{
    display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

}

.card ul{
    list-style-type: none;
    color: white;
}

.lista {
    list-style: none;
    padding: 0;
  }

  .lista li {
    text-align: center;
    margin: 10px;
  }

    .lista li:hover{
        background-color: #2B7197;
        color: #fff;
        border-radius: 10px;
        border-color: #2B7197;
    }

  .lista-Active{
    background: rgba(43,113,151,0.5);
    border-radius: 10px;
    text-decoration: underline;
  }

    </style>
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
