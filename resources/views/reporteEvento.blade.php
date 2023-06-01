@vite([ 'resources/css/style_reporteE.css',])
    <div class="contenedor">

        <div class="container General">
          <div class="container General">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad de Clases</th>
                    <th scope="col">Descripcion</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($eventos as $evento)
                    <tr>
                      <th scope="row"> {{ $evento->id }} </th>
                      <td> {{ $evento->nombre }} </td>
                      <td> {{ count($evento->temas) }} </td>
                      <td> {{ $evento->descripcion }} </td>


                    </tr>
                  @endforeach


                </tbody>
              </table>
        </div>

        </div>

      </div>
