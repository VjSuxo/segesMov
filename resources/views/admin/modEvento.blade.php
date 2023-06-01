<x-layouts.app >
    <div class="contenedor">
        <!-- Navegador-->
        <div class="navegadorUsuario">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <div class="">
                  <a class="nav-link" aria-current="page" href="{{route('admin.home')}}">Inicio</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.usuarios') }}">Usuarios</a>
              </li>
              <li class="nav-item activado">
                <a class="nav-link"  href="{{ route('admin.eventos') }}">Eventos</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link"  href="{{  route('admin.ambiente') }}">Ambiente</a>
              </li>
            </ul>
        </div>
        <!-- Contenido -->

        <div class="cuerpo">
            <div class="container text-center">
                <div class="titulo">
                    <h1 class="elemento">Modificar Evento</h1>
                </div>

                <div class="row align-items-start">
                        <div class="col"></div>
                        <div class="col">
                            <h1>MODIFICAR TEMAS {{ $tema->nombre }} </h1>
                           <form action="{{ route('admin.updateTema',['evento' => $evento, 'tema'=> $tema]) }}"method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre Tema</span>
                                <input type="text" class="form-control" placeholder="nombre tema"
                                    id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1"
                                    value="{{ old('nombre',$tema->nombre) }}">
                              </div>

                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" name="expositor" id="inputGroupSelect01">
                                  <option value="{{ $tema->expositor->id }}" selected> {{ $tema->expositor->usuario->name }} {{ $tema->expositor->usuario->apellido_Pat }} {{ $tema->expositor->usuario->apellido_Mat }} </option>
                                  @foreach ( $expositores as $expositor )
                                    @if ($expositor->id != $tema->expositor_id)
                                    <option value="{{ $expositor->id }}">{{ $expositor->usuario->name}} {{ $expositor->usuario->apellido_Pat}} {{ $expositor->usuario->apellido_Mat}}</option>
                                    @endif
                                  @endforeach

                                </select>
                              </div>

                              <div class="input-group mb-3">
                                <span class="input-group-text">Hora Inicio</span>
                                <input type="time" class="form-control" id="hI" name="hI" placeholder="" aria-label="Hora" value="{{ old('nombre',$tema->hora_inicio) }}">
                                <span class="input-group-text">Hora Fin</span>
                                <input type="time" class="form-control"  id="hF" name="hF" placeholder="" aria-label="Hora" value="{{ old('nombre',$tema->hora_fin) }}">
                                <span class="input-group-text">Fecha</span>
                                <input type="date" class="form-control"  id="fecha" name="fecha" placeholder="" aria-label="Fecha" value="{{ old('nombre',$tema->fecha) }}">
                              </div>

                              <div class="input-group">
                                <span class="input-group-text">Descripcion</span>
                                <textarea class="form-control" name="descripcion" id="descipcion" aria-label="With textarea" > {{ $tema->descripcion }} </textarea>
                              </div>

                              <button type="submit" class="btn btn-primary mt-5">Editar</button>
                           </form>
                        </div>
                        <div class="col"></div>
                    </div>
                </form>
              </div>
        </div>

    </div>
</x-layouts>
