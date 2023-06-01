
  <!-- Grupo: ci -->
  <div class="formulario__grupo" id="grupo__nombre">
    <label for="nombre" class="formulario__label">CI</label>
    <div class="formulario__grupo-input">
        <input  id="ci" type="number" class="formulario__input @error('name') is-invalid @enderror" name="ci" value="{{ old('name') }}" required autocomplete="ci" autofocus placeholder="ci">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

  <!-- Grupo: Nombre -->
  <div class="formulario__grupo" id="grupo__nombre">
    <label for="nombre" class="formulario__label">Nombre</label>
    <div class="formulario__grupo-input">
        <input  id="name" type="text" class="formulario__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Ap_Paterno -->

<div class="formulario__grupo" id="grupo__apellidoPaterno">
    <label for="apellidoPaterno" class="formulario__label">Ap. Paterno</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="apellidoPaterno" id="apellidoPaterno" placeholder="Reyes">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Ap_Materno -->
<div class="formulario__grupo" id="grupo__apellidoMaterno">
    <label for="apellidoMaterno" class="formulario__label">Ap. Materno</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="apellidoMaterno" id="apellidoMaterno" placeholder="Elizondo">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Nivel Estudios -->
<div class="formulario__grupo" id="grupo__apellidoMaterno">
    <label for="apellidoMaterno" class="formulario__label">Nivel de Estudios</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="estudios" id="estudios" placeholder="secundaria">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Profecion -->
<div class="formulario__grupo" id="grupo__apellidoMaterno">
    <label for="apellidoMaterno" class="formulario__label">Profesión</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="profesion" id="profesion" placeholder="profesión">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Empresa -->
<div class="formulario__grupo" id="grupo__apellidoMaterno">
    <label for="apellidoMaterno" class="formulario__label">Empresa</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="empresa" id="empresa" placeholder="empresa">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Grupo: Descripcion -->
<div class="formulario__grupo" id="grupo__apellidoMaterno">
    <label for="apellidoMaterno" class="formulario__label">Descripcion</label>
    <div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="descri" id="descri" placeholder="empresa">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>



<!-- Año Nacimiento-->

<div class="formulario__grupo" id="grupo__apellidoPaterno">
    <label for="apellidoPaterno" class="formulario__label">Año Nacimiento</label>
    <div class="formulario__grupo-input">
        <input type="number" class="formulario__input" name="anioNac" id="anioNac" placeholder="2000">
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

<!-- Genero -->

<div class="formulario__grupo" id="grupo__apellidoPaterno">
    <label for="apellidoPaterno" class="formulario__label">Genero</label>
    <div class="formulario__grupo-input">
        <select class="formulario__input" aria-label="Default select example" id="genero" name="genero">
            <option selected>Selecione Genero</option>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
            <option value="unicornio">Unicornio</option>
          </select>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
    </div>
    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
</div>

 <!-- Grupo: Correo Electronico -->
<div class="formulario__grupo" id="grupo__correo">
<label for="correo" class="formulario__label">Correo Electrónico</label>
<div class="formulario__grupo-input">
<input id="email" type="email" class="formulario__input  @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="correo@correo.com">
<i class="formulario__validacion-estado fas fa-times-circle"></i>
@error('email')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
</div>
