<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/style.css','resources/css/style_certificado.css'])
    <title>Document</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body >

    <style>

*{
    padding: 0;
    margin: 0;
}

nav{
    background: linear-gradient(181deg,
    rgba(43,113,151,0.7)  0%,
     rgba(28,28,28,0.9)147%);

}



.navegadorUsuario{
    background: linear-gradient(181deg,
    rgba(43,113,151,0.7)  0%,
     rgba(28,28,28,0.9)147%);

}
.navegadorUsuario a{
    color: white;
}


.contenedor .activado{
    background: linear-gradient(181deg,
    rgba(116,189,224,0.7)  0%,
     rgba(28,28,28,0.9)147%);
    border-radius: 20% 20% 0 0;

}

.contenedor .nav-link:hover{
    background: linear-gradient(181deg,
    rgba(161,225,250,0.5)  10%,
     rgba(28,28,28,0.9)130%);
    color: rgba(161,225,250,0.7);
}



.General{
    margin-top: 25px;
    min-height: 100vh;
    justify-content: center;
    align-items: center;

}

.contenedor{
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background: linear-gradient(181deg,
                             rgba(28,28,28,0.9) 20%,
                              rgba(43,113,151,0.7) 150%),
                              url(https://images.unsplash.com/photo-1592069915234-2a5c74fbd347?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1029&q=80) rgba(28,28,28,0.8);

    background-repeat: no-repeat;
    background-size: cover;
    scroll-behavior: smooth;

}


.paralelo{
    margin-top: 5%;
    display: flex;
    justify-content: space-around;
}

.pagination {
    color: white;
    margin-left: 35% ;
}

.pagination a {
    color: white;
    margin: 10px;
    font-size: 20px;
}

.pagination a:hover {
    background: rgb(99, 99, 159);
    border-radius: 10px;
    padding: 5px;
}

.pagination .active{
    background: blue;
    border-radius: 10px;
    padding: 5px;
}

.pagination .active:hover{
    background: rgb(92, 92, 176);
}




        .contenedor{
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background: linear-gradient(181deg,
                             rgba(28,28,28,0.9) 20%,
                              rgba(43,113,151,0.7) 150%),
                             rgba(28,28,28,0.8);

    background-repeat: no-repeat;
    background-size: cover;
    scroll-behavior: smooth;

}

body {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 50px;
}
.container-fluid {

    padding: 50px;

}
h1 {

    font-size: 36px;
    margin-bottom: 50px;
}
h2{
    font-size: 60px;
}
p {
    font-size: 20px;
     margin-bottom: 20px;
}


.curso {
    font-size: 25px;
}
.signature {
    margin-top: 50px;

}
.signature p {
    margin-bottom: 5px;
}
.signature img {
    max-width: 200px;
    margin-top: 10px;
}

    </style>

    <div class="">
        <div class="container-fluid text-center">
            <h1>CERTIFICADO DE FINALIZACIÓN</h1>
            <h2 class="curso"> {{ $evento->nombre }} </h2>
            <p class="certifica">Se certifica que:</p>
            <h2> {{ $usuario->name }} {{ $usuario->apellido_Pat }} {{ $usuario->apellido_Mat }} </h2>
            <p>ha participado en el {{ $evento->tipo }} de:  {{ $evento->nombre }}</p>

            <div class="signature">

                <img src="">
                <!-- {{ public_path('img/firma.png') }} -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
