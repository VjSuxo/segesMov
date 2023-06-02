<x-layouts.app>
    @vite(['resources/css/style_contac.css'])
    <style>
        .contenedor{
    align-items: center;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;

}

.container{
    width: 1000px!important;
}
p{
    font-size: 12px;
}
h1{
    font-family: Verdana, Geneva, Tahoma, sans-serif!important;
}
h2{
    color: #fff;
}
.bg-primary{
    background-color:#0075FF !important;
    font-family:Verdana, Geneva, Tahoma, sans-serif!important;

}
.form-control {
    height: 36px;
    background: #fff;
    color: rgba(253, 249, 249, 0.8);
    font-size: 14px;
    border-radius: 2px;
    box-shadow: none !important;
    border: 1px solid rgb(233, 226, 226);
}
.contactForm .form-control {
    border: none;
    border-bottom: 1px solid rgb(253, 250, 250);
    padding: 0;
}


.form-control:focus,.form-control:active {
    border-color: #01d28e !important;
}
.form-label {
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 0.5rem;
}
.btn.btn-primary {
    background: #0075FF !important;
    border-color: #0075FF !important;
    color: #fff;
    width: 100px;
    border-radius: 0!important;

}
.btn.btn-primary:hover{
    background-color: #0075FF!important;
}

.bi{
    font-size: 50px;
}
@media only screen and (max-width: 600px) {
    .container{
        width: 100%!important;
        padding-bottom: 207px!important;
    }
  }
    </style>

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
