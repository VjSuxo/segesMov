<x-layouts.app >
    <div class="contenedor">
        <div class="navegadorUsuario">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <div class="activado">
                <a class="nav-link" aria-current="page" href=" {{ route('expositor.Index') }} ">Eventos</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{ route('expositor.Foto') }}">FOTO</a>
            </li>
          </ul>
        </div>
        <div class="container General">
          <div class="container General">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Opcion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $temas as $tema )
                        <tr>
                            <th scope="row"> {{ $tema->id }} </th>
                            <td> {{ $tema->nombre }} </td>
                            <td> {{ $tema->hora_inicio }} a {{ $tema->hora_fin }} </td>
                            <td> {{ $tema->fecha }} </td>
                            <td> {{ $tema->evento->nombre}} </td>
                            <td><a type="button"  href="{{ route('expositor.eventoMaterial',$tema->id) }}" class="btn btn-primary">Material</a></td>
                          </tr>

                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>

        </div>

      </div>
</x-layouts>
