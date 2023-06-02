<x-layouts.app >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['/resources/css/style_expositorV.css'])
    <style>
        .box {
    width: 700px;
    height: 1000px;
    background: rgba(0, 0, 0, .4);
    padding: 20px;
    text-align: center;
    margin: 0 auto;

    color: white;
    font-family: 'Century Gothic', sans-serif;
    border-radius: 15px;
    /* box-shadow: 7px 13px 37px black; */
  }
.box .contenido{
    margin-top: 30%;
}
  .box-img {
    border-radius: 50%;
  }

  .box h1 {
    font-size: 40px;
    letter-spacing: 4px;
    font-weight: 100;
    margin: 30px 0 20px;
  }

  .box h2 {
    font-size: 20px;
    letter-spacing: 3px;
    font-weight: 100;
    margin-bottom: 30px
  }

  .box p {
    text-align: justify;
  }

  .box ul {
    margin-top: 20px;
    list-style: none;
  }

  .box ul li {
    display: inline-block;
  }
  .box ul li a {
    color: white;
    font-size: 45px;
    padding: 10px 5px;
    transition: all .5s ease-in-out;
    display: block;
  }

  .box ul li a:hover {
    color:#b9b9b9;
    transform: scale(1.3);
  }

    </style>
    <div class="conten">
        <section class="box">
            <div class="contenido">
                <img src=" {{ $expositor->url }} " width="180" alt="" class="box-img">
                <h1> {{ $expositor->usuario->name }} </h1>
                <h2>Software Engineer - Web Developer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ut hic consequuntur quo qui culpa veritatis, blanditiis corrupti perspiciatis illo a laudantium illum sunt deleniti, nihil doloremque! Obcaecati, at, cupiditate.</p>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>

          </section>
    </div>
</x-layouts>
