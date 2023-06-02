<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/style.css','resources/css/style_texto.css'])

<style>
    table th{
    color: white;
}

table td{
    color: white;
}

p{
    color: white;
}

.formulario h3{
    color: white;
}

.titulo {
    margin: 5% 1%;
    color: white;
    text-align: center;
}


</style>

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

    <style>
        .contenedor{
    align-items: center;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;

}
.wrapper {
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(36, 122, 243, 0.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
}
.wrapper .icon-close{
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    font-size: 2em;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;

}
.wrapper .form-box{
    width: 100%;
    padding: 40px;
}
.form-box h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #fff;
    margin: 30px 0;
}
.input-box label{
    position:absolute;
    top:50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;

}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    font-weight: 600;
    padding: 0 35px 0 5px;

}
.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color:#fff;
    line-height: 57px;
}
.remember-forgot{
    font-size: .9em;
    color:#fff;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input{
    accent-color: #2B7197;
    margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}

.btn{
    width: 100%;
    height: 45px;
    background: #2B7197;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
}
.login-register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 10px;
}
.login-registrer p a{
    color: #2B7197;
    text-decoration: none;
    font-weight: 600;
}
.login-registrer p a:hover{
    text-decoration: underline;
}

    </style>

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
