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
