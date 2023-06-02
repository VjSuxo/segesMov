<x-layouts.app>

    @vite(['resources/css/style_Preguntas.css'])
    <style>
        .contenedor{
    align-items: center;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;

}
.container {
    width: 90%;
    margin: 100px auto;
}

.container-faq {
    box-shadow: 0 0 15px -1px rgba(0,0,0,.1);
    padding: 30px;
}

.container-faq .title-faq {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 30px;
}

.container-faq .item-faq {
    box-shadow: 0 0 15px -1px rgba(253, 253, 253, 0.2);
    margin-bottom: 20px;
    border-radius: 10px;
}

.container-faq .item-faq .question {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(4, 4, 247, 0.2);
    padding: 20px 20px 20px 80px;
    transition: .4s;
    color: #fff;
}

.container-faq .item-faq .question .more {
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 0 15px -1px rgba(252, 251, 251, 0.2);
    width: 40px;
    height: 40px;
    font-size: 1rem;
    cursor: pointer;
    transition: .4s;
    color: #fff;
}

.container-faq .item-faq .question .more:hover {
    box-shadow: 0 0 15px -1px rgba(252, 249, 249, 0.4);
}

.container-faq .item-faq .question span {
    position: absolute;
    left: 10px;
    font-size: 3rem;
    top: 10px;
    opacity: .1;

}

.container-faq .item-faq .answer {
    position: relative;
    padding: 0 20px 0 80px;
    overflow: hidden;
    height: 0;
    transition: .4s;
    color: #fff;
}

.container-faq .item-faq .answer p {
    font-size: 1.3rem;
}

.container-faq .item-faq .answer span {
    position: absolute;
    left: 10px;
    font-size: 3rem;
    top: -10px;
    opacity: .2;
}
h3{
    color: #fff;
}
    </style>
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
