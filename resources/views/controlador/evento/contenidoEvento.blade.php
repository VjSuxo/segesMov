<x-layouts.app>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/style_controlador.css'])
    <div class="contenedor">
        <div class="contaniner General">
            <div class="cuerpo">
                <h1>Contenido</h1>
                <a href=" {{ route('user.evento-material',$evento->id) }} " class=" btn btn-primary">
                    Agregar
                </a>
                <ol class="list-group list-group-numbered">
                    @foreach ( $evento->temas as $tema )
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="titulo" name="titulo" value=" {{ $tema->nombre }} " >
                            </div>

                            {{ $tema->expositor->usuario->name }} {{ $tema->expositor->usuario->apellido_Pat }} {{ $tema->expositor->usuario->apellido_Mat }}
                            </div>
                            <span class=" ">Fecha : <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="fecha" name="fecha" value="{{ $tema->fecha }}" > <br> Hora: <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="hora" name="hora" value="{{ $tema->hora_inicio }}" > /span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</x-layouts.app>
