<x-layouts.app >
    @vite(['resources/css/style_index1.css'])

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <div class="containeer">
        <!--<a href="login.html">login</a>
        <a href="register.html">register</a>-->
        <section class="banner">
          <div class="content-banner">
            <p>SEGES</p>
            <h2>Sistema de Eventos <br />Academicos</h2>
            <a href="#">Iniciar ahora</a>
          </div>
        </section>
        <main class ="main-conten">
          <section class="container container-features">
            <div class="card-feature">
              <i class="fa-brands fa-square-youtube"></i>
              <div class="feature-content">
                <span>TUTORIALES</span>
                <p>Acceso libre a nuestros cursos</p>
              </div>
            </div>
            <div class="card-feature">
              <i class="fa-solid fa-people-line"></i>
              <div class="feature-content">
                <span>CONFERENCIA</span>
                <p>Aprovecha al maximo nuestras conferencias</p>
              </div>
            </div>
            <div class="card-feature">
              <i class="fa-solid fa-gift"></i>
              <div class="feature-content">
                <span>MESA REDONDA</span>
                <p>Drisfruta y comparte diversas opiniones.</p>
              </div>
            </div>
            <div class="card-feature">
              <i class="fa-solid fa-person-chalkboard"></i>
              <div class="feature-content">
                <span>PRESENTACION DE PROYECTOS</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              </div>
            </div>
          </section>
          <section class="container top-products">
            <h1 class="heading-1">EVENTOS</h1>


           <div class="container-products">
                          <!-- Producto 1 -->

                          @foreach ( $eventos as $evento )
                            <div class="card-product">
                                <div class="container-img">
                                    <img
                                        src=" {{ $evento->url }} "
                                        alt="evento.jpg"
                                    />
                                    <div class="button-group">
                                        <span>
                                            <i class="fa-regular fa-eye"></i>
                                        </span>
                                        <span>
                                            <i class="fa-regular fa-heart"></i>
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-code-compare"></i>
                                        </span>
                                    </div>
                                    </div>
                                    <div class="content-card-product">
                                   <!--     <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    -->
                                        <h3> {{ $evento->nombre }} </h3>
                                        <span class="add-cart">
                                            <a href=" {{ route('eventoIndex',$evento->id) }} ">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </a>
                                        </span>
                                        <p class="price">
                                            @if ( $evento->estado == 0 )
                                                Reserva
                                            @endif
                                            @if ( $evento->estado == 1 )
                                                Inscipcion
                                            @endif
                                            @if ( $evento->estado == 2 )
                                                Avance
                                            @endif
                                        </p>
                                    </div>
                                </div>
                          @endforeach


                      </div>
                  </section>

               <!---   <section class="gallery">
                      <img
                          src="img/gallery1.jpg"
                          alt="Gallery Img1"
                          class="gallery-img-1"
                      /><img
                          src="img/gallery2.jpg"
                          alt="Gallery Img2"
                          class="gallery-img-2"
                      /><img
                          src="img/gallery3.jpg"
                          alt="Gallery Img3"
                          class="gallery-img-3"
                      /><img
                          src="img/gallery4.jpg"
                          alt="Gallery Img4"
                          class="gallery-img-4"
                      /><img
                          src="img/gallery5.jpg"
                          alt="Gallery Img5"
                          class="gallery-img-5"
                      />
                  </section>
                -->


                  <section class="container blogs">
                      <h1 class="heading-1">Expositores </h1>


                      <div class="container-blogs">
                        <div id="miCarrusel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              @foreach ($expositoresP as $index => $expositor)
                                  <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="card-blog">
                                        <div class="container-img">
                                            <img src=" {{ $expositor->url }} " alt="Imagen Blog 1" />
                                            <div class="button-group-blog">
                                                <span>
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span>
                                                    <i class="fa-solid fa-link"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="content-blog">
                                            <h3> {{ $expositor->usuario->name }} </h3>
                                            <span>{{ $expositor->usuario->email }}</span>
                                            <p>
                                                {{ $expositor->biografia }}
                                            </p>
                                            <div class="btn-read-more"> <a href=" {{ route('expositor',$expositor->id) }} ">Leer mas</a> </div>
                                        </div>
                                    </div>
                                  </div>
                              @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Siguiente</span>
                            </a>



                      </div>
                  </section>
              </main>





          </section>
        </main>
        </div>
      </div>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</x-layouts>
