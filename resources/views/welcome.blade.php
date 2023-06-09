<x-layouts.app >
    @vite(['resources/css/style_index1.css'])
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

:root {
	--primary-color: #6384d0;
	--background-color: #f9f5f0;
	--dark-color: #151515;
}

html {
    font-size: 95%;
	font-family: 'Poppins', sans-serif;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

/* ********************************** */
/*             UTILIDADES             */
/* ********************************** */
.container {
	max-width: 120rem;
	margin: 0 auto;
	color: #fff;
}

.heading-1 {
	text-align: center;
	font-weight: 500;
	font-size: 3rem;
}


/* ********************************** */
/*               BANNER               */
/* ********************************** */
.banner {
	background-image: linear-gradient(100deg, #000000, #00000020),
		url('/storage/app/public/img/banner.jpg');
	height: 60rem;
	background-size: cover;
	background-position: center;
}

.content-banner {
	max-width: 90rem;
	margin: 0 auto;
	padding: 25rem 0;
}

.content-banner p {
	color: var(--primary-color);
	font-size: 1.2rem;
	margin-bottom: 1rem;
	font-weight: 500;
}

.content-banner h2 {
	color: #fff;
	font-size: 3.5rem;
	font-weight: 500;
	line-height: 1.2;
}

.content-banner a {
	margin-top: 2rem;
	text-decoration: none;
	color: #fff;
	background-color: var(--primary-color);
	display: inline-block;
	padding: 1rem 3rem;
	text-transform: uppercase;
	border-radius: 3rem;
}

/* ********************************** */
/*            MAIN CONTENT            */
/* ********************************** */
.main-content {
	background-color: var(--background-color);
}

/* ********************************** */
/*              FEATURES              */
/* ********************************** */
.container-features {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	gap: 3rem;
	padding: 3rem 0;
}

.card-feature {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 1.5rem;

	background-color: #fff;
	border-radius: 1rem;
	padding: 1.5rem 0;
}

.card-feature i {
	font-size: 2.7rem;
	color: var(--primary-color);
}

.feature-content {
	display: flex;
	flex-direction: column;
	gap: 0.5rem;
}

.feature-content span {
	font-weight: 700;
	font-size: 1.2rem;
	color: var(--dark-color);
}

.feature-content p {
	color: #777;
	font-weight: 500;
}

/* ********************************** */
/*             CATEGORIES             */
/* ********************************** */

.top-categories {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

.container-categories {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.card-category {
	height: 20rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-radius: 2rem;
	gap: 2rem;
}

.category-moca {
	background-image: linear-gradient(#00000080, #00000080),
		url('img/moca-category.jpg');
	background-size: cover;
	background-position: bottom;
	background-repeat: no-repeat;
}

.category-capuchino {
	background-image: linear-gradient(#00000080, #00000080),
		url('img/capuchino-category.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.category-expreso {
	background-image: linear-gradient(#00000080, #00000080),
		url('img/expreso-category.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.card-category p {
	font-size: 2.5rem;
	color: #fff;
	text-transform: capitalize;
	position: relative;
}

.card-category p::after {
	content: '';
	width: 2.5rem;
	height: 2px;
	background-color: #fff;
	position: absolute;
	bottom: -1rem;
	left: 50%;
	transform: translate(-50%, 50%);
}

.card-category span {
	font-size: 1.6rem;
	color: #fff;
	cursor: pointer;
}

.card-category span:hover {
	color: var(--primary-color);
}

/* ********************************** */
/*            TOP PRODUCTS            */
/* ********************************** */
.top-products {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

.container-options {
	display: flex;
	justify-content: center;
	gap: 2rem;
	margin-bottom: 1rem;
}

.container-options span {
	color: #777;
	background-color: #fff;
	padding: 0.7rem 3rem;
	font-size: 1.4rem;
	text-transform: capitalize;
	border-radius: 2rem;
	cursor: pointer;
}

.container-options span:hover {
	background-color: var(--primary-color);
	color: #fff;
}

.container-options span.active {
	background-color: var(--primary-color);
	color: #fff;
}

/* Products */
.container-products {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
	gap: 3rem;
}

.card-product {
	background-color: #fff;
	padding: 2rem 3rem;
	border-radius: 0.5rem;
	cursor: pointer;
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
}

.container-img {
	position: relative;
}

.container-img img {
	width: 100%;

    padding: 1px;
    margin-bottom: 10px;
}

.container-img .discount {
	position: absolute;
	left: 0;
	background-color: var(--primary-color);
	color: #000000;
	padding: 2px 1.2rem;
	border-radius: 1rem;
	font-size: 1.2rem;
}

.card-product:hover .discount {
	background-color: #000;
}

.button-group {
	display: flex;
	flex-direction: column;
	gap: 1rem;

	position: absolute;
	top: 0;
	right: -3rem;
	z-index: -1;
	transition: all 0.4s ease;
}

.button-group span {
	border: 1px solid var(--primary-color);
	padding: 0.8rem;

	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.4s ease;
}

.button-group span:hover {
	background-color: var(--primary-color);
}

.button-group span i {
	font-size: 1.5rem;
	color: var(--primary-color);
}

.button-group span:hover i {
	color: #fff;
}

.card-product:hover .button-group {
	z-index: 0;
	right: -1rem;
}

.content-card-product {
	display: grid;
	justify-items: center;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: repeat(4, min-content);
	row-gap: 1rem;
}

.stars {
	grid-row: 1/2;
	grid-column: 1/-1;
}

.stars i {
	font-size: 1.3rem;
	color: var(--primary-color);
}

.content-card-product h3 {
	grid-row: 2/3;
	grid-column: 1/-1;
    color: #000;
	font-weight: 400;
	font-size: 1.6rem;
	margin-bottom: 1rem;
	cursor: pointer;
}

.content-card-product h3:hover {
	color: var(--primary-color);
}

.add-cart {
	justify-self: start;
	border: 2px solid var(--primary-color);
	padding: 1rem;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.4s ease;

	display: flex;
	align-items: center;
	justify-content: center;
}

.add-cart:hover {
	background-color: var(--primary-color);
}

.add-cart i {
	font-size: 1.5rem;
	color: var(--primary-color);
}

.add-cart:hover i {
	color: #fff;
}

.content-card-product .price {
	justify-self: end;
	align-self: center;
    color: #000;
	font-size: 1.7rem;
	font-weight: 600;
}

.content-card-product .price span {
	font-size: 1.5rem;
	font-weight: 400;
	text-decoration: line-through;
	color: #777;
	margin-left: 0.5rem;
}

/* ********************************** */
/*               GALLERY              */
/* ********************************** */
.gallery {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: repeat(2, 30rem);
	gap: 1.5rem;
	margin-bottom: 3rem;
}

.gallery img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.gallery-img-3 {
	grid-column: 2/4;
	grid-row: 1/3;
}

/* ********************************** */
/*              SPECIALS              */
/* ********************************** */
.specials {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

/* ********************************** */
/*                BLOGS               */
/* ********************************** */
.carousel{}

.carousel-item{

    width: 80%;
    height: 5%;
    margin-bottom: 10px;
}
.carousel-item .blogs {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.carousel-item .container-blogs {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.container-blogs .carousel-item{
}


.carousel-item .card-blog {
	display: flex;
	flex-direction: row;
	gap: 2rem;
}

.carousel-item .card-blog .container-img {
	border-radius: 2rem;
	cursor: pointer;
	position: relative;
	overflow: hidden;
}

.carousel-item .button-group-blog {
	position: absolute;
	bottom: 1.5rem;
	right: -2.5rem;

	display: flex;
	gap: 0.7rem;
	z-index: -1;
	transition: all 0.3s ease;
}

.carousel-item .card-blog:hover .button-group-blog {
	z-index: 0;
	right: 1.5rem;
}

.carousel-item .button-group-blog span {
	background-color: #fff;
	padding: 1rem;
	border-radius: 50%;
	transition: all 0.4s ease;

	display: flex;
	align-items: center;
	justify-content: center;
}

.carousel-item .button-group-blog span i {
	font-size: 1.3rem;
}

.carousel-item .button-group-blog span:hover {
	background-color: var(--primary-color);
}

.carousel-item .button-group-blog span:hover i {
	color: #fff;
}

.carousel-item .content-blog h3 {
	font-size: 1.8rem;
	margin-bottom: 1.7rem;
	color: var(--dark-color);
	font-weight: 500;
}

.carousel-item .content-blog h3:hover {
	color: var(--primary-color);
	cursor: pointer;
}

.carousel-item .content-blog p {
	margin-top: 1rem;
	font-size: 1.4rem;
	color: #777;
}

.carousel-item .content-blog span {
	color: var(--primary-color);
	font-size: 1.3rem;
}

.carousel-item .btn-read-more {
	padding: 1rem 3rem;
	background-color: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 1.4rem;
	border-radius: 2rem;
	margin: 3rem 0 5rem;
	display: inline-block;
	cursor: pointer;
}

.carousel-item .btn-read-more:hover {
	background-color: var(--dark-color);
}

/* ********************************** */
/*               FOOTER               */
/* ********************************** */

.footer {
	background-color: var(--primary-color);
}

.container-footer {
	display: flex;
	flex-direction: column;
	gap: 4rem;
	padding: 3rem;
}

.menu-footer {
	display: grid;
	grid-template-columns: repeat(3, 1fr) 30rem;
	gap: 3rem;
	justify-items: center;
}

.title-footer {
	font-weight: 600;
	font-size: 1.6rem;
	text-transform: uppercase;
}

.contact-info,
.information,
.my-account,
.newsletter {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.contact-info ul,
.information ul,
.my-account ul {
	display: flex;
	flex-direction: column;
	gap: 1rem;
}

.contact-info ul li,
.information ul li,
.my-account ul li {
	list-style: none;
	color: #fff;
	font-size: 1.4rem;
	font-weight: 300;
}

.information ul li a,
.my-account ul li a {
	text-decoration: none;
	color: #fff;
	font-weight: 300;
}

.information ul li a:hover,
.my-account ul li a:hover {
	color: var(--dark-color);
}

.social-icons {
	display: flex;
	gap: 1.5rem;
}

.social-icons span {
	border-radius: 50%;
	width: 3rem;
	height: 3rem;

	display: flex;
	align-items: center;
	justify-content: center;
}

.social-icons span i {
	color: #fff;
	font-size: 1.2rem;
}

.facebook {
	background-color: #3b5998;
}

.twitter {
	background-color: #00acee;
}

.youtube {
	background-color: #c4302b;
}

.pinterest {
	background-color: #c8232c;
}

.instagram {
	background: linear-gradient(
		#405de6,
		#833ab4,
		#c13584,
		#e1306c,
		#fd1d1d,
		#f56040,
		#fcaf45
	);
}

.content p {
	font-size: 1.4rem;
	color: #fff;
	font-weight: 300;
}

.content input {
	outline: none;
	background: none;
	border: none;
	border-bottom: 2px solid #d2b495;
	cursor: pointer;
	padding: 0.5rem 0 1.2rem;
	color: var(--dark-color);
	display: block;
	margin-bottom: 3rem;
	margin-top: 2rem;
	width: 100%;
	font-family: inherit;
}

.content input::-webkit-input-placeholder {
	color: #eee;
}

.content button {
	border: none;
	background-color: #000;
	color: #fff;
	text-transform: uppercase;
	padding: 1rem 3rem;
	border-radius: 2rem;
	font-size: 1.4rem;
	font-family: inherit;
	cursor: pointer;
	font-weight: 600;
}

.content button:hover {
	background-color: var(--background-color);
	color: var(--primary-color);
}

.copyright {
	display: flex;
	justify-content: space-between;
	padding-top: 2rem;

	border-top: 1px solid #d2b495;
}

.copyright p {
	font-weight: 400;
	font-size: 1.6rem;
}

/* ********************************** */
/*       MEDIA QUERIES -- 768px       */
/* ********************************** */
@media (max-width: 768px) {
	html {
		font-size: 55%;
	}

	.hero {
		padding: 2rem;
	}

	.customer-support {
		display: none;
	}

	.content-shopping-cart {
		display: none;
	}

	.navbar {
		padding: 1rem 2rem;
	}

	.navbar .fa-bars {
		display: block;
		color: #fff;
		font-size: 3rem;
	}

	.menu {
		display: none;
	}

	.content-banner {
		max-width: 50rem;
		margin: 0 auto;
		padding: 25rem 0;
	}

	.container-features {
		grid-template-columns: repeat(2, 1fr);
		padding: 3rem 2rem;
	}

	.card-feature {
		padding: 2rem;
	}

	.heading-1 {
		font-size: 2.4rem;
	}

	.card-category {
		height: 12rem;
	}

	.card-category p {
		font-size: 2rem;
		text-align: center;
		line-height: 1;
	}

	.card-category span {
		font-size: 1.4rem;
	}

	.container-options {
		align-items: center;
	}

	.container-options span {
		text-align: center;
		padding: 1rem 2rem;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
	}

	.gallery {
		grid-template-rows: repeat(2, 15rem);
	}

	.container-blogs {
		overflow: hidden;
		grid-template-columns: 1fr 1fr;

		height: 52rem;
	}

	.menu-footer {
		grid-template-columns: repeat(2, 1fr);
	}

	.copyright {
		flex-direction: column;
		justify-content: center;
		align-items: center;
		gap: 1.5rem;
	}
}

/* ********************************** */
/*       MEDIA QUERIES -- 468px       */
/* ********************************** */
@media (max-width: 468px) {
	html {
		font-size: 42.5%;
	}

	.content-banner {
		max-width: 50rem;
		padding: 22rem 0;
	}

	.heading-1 {
		font-size: 2.8rem;
	}

	.card-feature {
		flex-direction: column;
		border-radius: 2rem;
	}

	.feature-content {
		align-items: center;
	}

	.feature-content p {
		font-size: 1.4rem;
		text-align: center;
	}

	.feature-content span {
		font-size: 1.6rem;
		text-align: center;
	}

	.container-options span {
		font-size: 1.8rem;
		padding: 1rem 1.5rem;
		font-weight: 500;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
		gap: 1rem;
	}

	.container-img .discount {
		font-size: 2rem;
	}

	.content-card-product h3 {
		font-size: 2.2rem;
	}

	.gallery {
		grid-template-rows: repeat(2, 20rem);
	}

	.blogs {
		padding: 2rem;
	}

	.container-blogs {
		grid-template-columns: 1fr;
		height: 75rem;
	}

	.content-blog h3 {
		font-size: 2.4rem;
	}

	.content-blog span {
		font-size: 1.8rem;
	}

	.content-blog p {
		font-size: 2.2rem;
	}

	.btn-read-more{
		font-size: 1.8rem;
	}

	.contact-info ul,
	.information ul,
	.my-account ul{
		display: none;
	}

	.contact-info {
		align-items: center;
	}

	.menu-footer{
		grid-template-columns: 1fr;
	}

	.content p{
		font-size: 1.6rem;
	}
}



</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <div class="containeer">
        <!--<a href="login.html">login</a>
        <a href="register.html">register</a>-->
        <section class="banner">
          <div class="content-banner">
            <p>SEGES</p>
            <h2>Sistema de Eventos <br />Academicos</h2>

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
