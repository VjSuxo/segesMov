<x-layouts.app >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['/resources/css/style_expositorV.css'])
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
