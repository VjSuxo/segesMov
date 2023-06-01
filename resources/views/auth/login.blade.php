<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/style.css','resources/css/style_texto.css'])
    <title>Document</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body >

    <x-layouts.navigation/>
    <div class="contenedor">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/style_login.css'])

    <!-- CAptucha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <!-- CAptucha -->
 <!--Contenido Login-->
 <div class="container wrapper">
    <span class="icon-close">
        <ion-icon name="close-circle-outline"></ion-icon>
    </span>
    <div class="form-box login">
        <h2>Login</h2>
        <form id="demo-form"  method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input id="email" name="email" type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-open-outline"></ion-icon></span>
                <input id="password" name="password" type="password" required>
                <label >Password</label>
            </div>
           <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password?</a>
           </div>
            <!-- CAptucha -->
           <div class="g-recaptcha" data-sitekey="6LeIrzklAAAAANX4OlQc-s0DHoyqFGxiMzO553a0"></div>
            <br/>
            <!-- CAptucha -->
           <button type="submit"class="btn">Iniciar Sesión</button>
           <div class="login-register">
            <p>Don't have an account? <a href="{{ route('register') }}"class="register-link">Register</a></p>
           </div>

        </form>
    </div>
</div>



    </div>
</body>

</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
