<x-layouts.app >
    @vite(['resources/css/style_register.css'])
    <style>

.contenedor{
    align-items: center;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;

}

body {
	font-family: 'Roboto', sans-serif;
	background: #E5E5E5;
}

.main {
	max-width: 800px;
	width: 90%;
	margin: auto;
	padding: 40px;
}

.formulario {
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



    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="container main">
            <form method="POST" action="{{ route('admin.storeUsuario') }}" class="formulario" enctype="multipart/form-data">
                @csrf
                @include('components.layouts.formulario')
                <div class="input-group mb-3">
                    <select class="form-select form-control " name="rol" id="rol" aria-label="Default select example">

                        <option  value="1">usuario</option>


                        <option  value="2">controlador</option>


                        <option  value="3">expositor</option>


                        <option  value="0">admin</option>


                    </select>
                </div>
                   <!-- Grupo: Contraseña -->
                   <div class="formulario__grupo" id="grupo__password">
                    <label for="password" class="formulario__label">Contraseña</label>
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" name="password" id="password">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                     <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                    </div>

                <!-- Grupo: Contraseña 2 -->
                <div class="formulario__grupo" id="grupo__password2">
                    <label for="password2" class="formulario__label">Repetir Contraseña</label>
                    <div class="formulario__grupo-input">
                        <input id="password-confirm" type="password" class="formulario__input" name="password_confirmation" required autocomplete="new-password">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                </div>

                <!-- Grupo: Terminos y Condiciones -->
                <div class="formulario__grupo" id="grupo__terminos">
                    <label class="formulario__label">
                        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                        Acepto los Terminos y Condiciones
                    </label>
                </div>

                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layouts>
