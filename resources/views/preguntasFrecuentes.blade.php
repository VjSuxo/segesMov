<x-layouts.app>

    @vite(['resources/css/style_Preguntas.css'])
    <script src="preguntas.js"></script>
    <link rel="stylesheet" href="style_Preguntas.css">
    <div class="container">
        <div class="row">
            <div class="container-faq">
                <div class="title-faq">
                    <h3>Preguntas Frecuentes</h3>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit ? <span>Q</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat vitae tenetur eos doloremque. Tempora sed ut consequatur laboriosam sit mollitia beatae error, omnis deleniti, earum eius odit. Doloribus, nesciunt.<span>A</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit ? <span>Q</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat vitae tenetur eos doloremque. Tempora sed ut consequatur laboriosam sit mollitia beatae error, omnis deleniti, earum eius odit. Doloribus, nesciunt.<span>A</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit ? <span>Q</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat vitae tenetur eos doloremque. Tempora sed ut consequatur laboriosam sit mollitia beatae error, omnis deleniti, earum eius odit. Doloribus, nesciunt.<span>A</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit ? <span>Q</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat vitae tenetur eos doloremque. Tempora sed ut consequatur laboriosam sit mollitia beatae error, omnis deleniti, earum eius odit. Doloribus, nesciunt.<span>A</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit ? <span>Q</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat vitae tenetur eos doloremque. Tempora sed ut consequatur laboriosam sit mollitia beatae error, omnis deleniti, earum eius odit. Doloribus, nesciunt.<span>A</span></p>
                    </div>
                </div>

            </div>
        </div>

        <script>


let question = document.querySelectorAll('.question');
let btnDropdown = document.querySelectorAll('.question .more')
let answer = document.querySelectorAll('.answer');
let parrafo = document.querySelectorAll('.answer p');

for ( let i = 0; i < btnDropdown.length; i ++ ) {

    let altoParrafo = parrafo[i].clientHeight;
    let switchc = 0;

    btnDropdown[i].addEventListener('click', () => {

        if ( switchc == 0 ) {

            answer[i].style.height = `${altoParrafo}px`;
            question[i].style.marginBottom = '10px';
            btnDropdown[i].innerHTML = '<i>-</i>';
            switchc ++;

        }

        else if ( switchc == 1 ) {

            answer[i].style.height = `0`;
            question[i].style.marginBottom = '0';
            btnDropdown[i].innerHTML = '<i>+</i>';
            switchc --;

        }

    })

}

            </script>

    </div>



</x-layouts.app>
