<x-layouts.app >
    @vite(['resources/css/style_register.css'])
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
