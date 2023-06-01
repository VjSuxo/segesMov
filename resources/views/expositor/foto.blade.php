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
            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                  </div>
                  <div class="col">

                    <form action=" {{ route('expositor.upFoto') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Subir Foto</h1>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" accept="image/*" id="imagen" name="imagen">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            <br>
                            @error('imagen')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Generar</button>
                    </form>
                  </div>
                  <div class="col">
                  </div>
                </div>
              </div>
        </div>

        </div>

      </div>
</x-layouts>
