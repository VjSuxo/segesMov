<x-layouts.app>
    @vite(['resources/css/style_contac.css'])

<div class="container mt-5 shadow ">
    <div class="row ">
        <div class="col-md-4 bg-primary p-5 text-white order-sm-first order-last">
            <h2>Sigamos en Contacto</h2>
            <p>We're open for any suggestion or just to have a chat</p>
            <div class="d-flex mt-2">
                <i class="bi bi-geo-alt"></i>
                <p class="mt-3 ms-3">Address : Road 198 West 21th Street, Suite 721 Singapor WW 10016</p>
            </div>
            <div class="d-flex mt-2">
                <i class="bi bi-telephone-forward"></i>
                <p class="mt-4 ms-3">Phone : 8888888888</p>
            </div>
            <div class="d-flex mt-2">
                <i class="bi bi-envelope"></i>
                <p class="mt-4 ms-3">Email : contactform@gmail.com</p>
            </div>

        </div>
        <div class="col-md-8 p-5 ">
            <h2>Contactanos</h2>
            <form class="row g-3 contactForm mt-4">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nombre Completo</label>
                  <input type="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Correo</label>
                  <input type="password" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Asunto</label>
                  <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mensaje</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                  </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </div>
              </form>
        </div>
    </div>
</div>

</x-layouts.app>
