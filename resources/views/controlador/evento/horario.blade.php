<x-layouts.app>
    @vite(['resources/css/style_Inputs.css','resources/css/style_calendar.css',])
<style>

.formulario-h{
    display: flex;
    justify-content: space-between;
    margin-top: 10%;
}



.btn{
    width: 50%;
    margin-left: 30%;
}

.formulario{
    border: 2px solid white;
    border-radius: 8%;
    padding: 20px;
}

.formulario input{
    background: #A1E1FA;
    border-radius: 10px;
    margin-left: 10px;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
}
:root {
    --dark-body: #4d4c5a;
    --dark-main: #141529;
    --dark-second: #79788c;
    --dark-hover: #323048;
    --dark-text: #f8fbff;

    --light-body: #A1E1FA;
    --light-main: #A1E1FA;
    --light-second: #4A8DB7;
    --light-hover: #4A8DB7;
    --light-text: #151426;

    --blue: #0000ff;
    --white: #fff;

    --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    --font-family: cursive;
  }

  .dark {
    --bg-body: var(--dark-body);
    --bg-main: var(--dark-main);
    --bg-second: var(--dark-second);
    --color-hover: var(--dark-hover);
    --color-txt: var(--dark-text);
  }

  .light {
    --bg-body: var(--light-body);
    --bg-main: var(--light-main);
    --bg-second: var(--light-second);
    --color-hover: var(--light-hover);
    --color-txt: var(--light-text);
  }




  .calendar {
    height: max-content;
    width: max-content;
    background-color: var(--bg-main);
    border-radius: 30px;
    padding: 20px;
    position: relative;
    overflow: hidden;
    /* transform: scale(1.25); */
  }

  .light .calendar {
    box-shadow: var(--shadow);
    -webkit-box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
box-shadow: 10px 10px 5px 0px rgba(4,3,7,1);
  }

  .calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 25px;
    font-weight: 600;
    color: var(--color-txt);
    padding: 10px;
  }

  .calendar-body {
    padding: 10px;
  }

  .calendar-week-day {
    height: 50px;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    font-weight: 600;
  }

  .calendar-week-day div {
    display: grid;
    place-items: center;
    color: var(--bg-second);
  }

  .calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 2px;
    color: var(--color-txt);
  }

  .calendar-days div {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    position: relative;
    cursor: pointer;
    animation: to-top 1s forwards;
    /* border-radius: 50%; */
  }

  .calendar-days div span {
    position: absolute;
  }

  .calendar-days div:hover span {
    transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
  }

  .calendar-days div span:nth-child(1),
  .calendar-days div span:nth-child(3) {
    width: 2px;
    height: 0;
    background-color: var(--color-txt);
  }

  .calendar-days div:hover span:nth-child(1),
  .calendar-days div:hover span:nth-child(3) {
    height: 100%;
  }

  .calendar-days div span:nth-child(1) {
    bottom: 0;
    left: 0;
  }

  .calendar-days div span:nth-child(3) {
    top: 0;
    right: 0;
  }

  .calendar-days div span:nth-child(2),
  .calendar-days div span:nth-child(4) {
    width: 0;
    height: 2px;
    background-color: var(--color-txt);
  }

  .calendar-days div:hover span:nth-child(2),
  .calendar-days div:hover span:nth-child(4) {
    width: 100%;
  }

  .calendar-days div span:nth-child(2) {
    top: 0;
    left: 0;
  }

  .calendar-days div span:nth-child(4) {
    bottom: 0;
    right: 0;
  }

  .calendar-days div:hover span:nth-child(2) {
    transition-delay: 0.2s;
  }

  .calendar-days div:hover span:nth-child(3) {
    transition-delay: 0.4s;
  }

  .calendar-days div:hover span:nth-child(4) {
    transition-delay: 0.6s;
  }

  .calendar-days div.curr-date,
  .calendar-days div.curr-date:hover {
    background-color: var(--blue);
    color: var(--white);
    border-radius: 50%;
  }

  .calendar-days div.curr-date span {
    display: none;
  }

  .month-picker {
    padding: 5px 10px;
    border-radius: 10px;
    cursor: pointer;
  }

  .month-picker:hover {
    background-color: var(--color-hover);
  }

  .year-picker {
    display: flex;
    align-items: center;
  }

  .year-change {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin: 0 10px;
    cursor: pointer;
  }

  .year-change:hover {
    background-color: var(--color-hover);
  }

  .calendar-footer {
    padding: 10px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .toggle {
    display: flex;
  }

  .toggle span {
    margin-right: 10px;
    color: var(--color-txt);
  }

  .dark-mode-switch {
    position: relative;
    width: 48px;
    height: 25px;
    border-radius: 14px;
    background-color: var(--bg-second);
    cursor: pointer;
  }

  .dark-mode-switch-ident {
    width: 21px;
    height: 21px;
    border-radius: 50%;
    background-color: var(--bg-main);
    position: absolute;
    top: 2px;
    left: 2px;
    transition: left 0.2s ease-in-out;
  }

  .dark .dark-mode-switch .dark-mode-switch-ident {
    top: 2px;
    left: calc(2px + 50%);
  }

  .month-list {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: var(--bg-main);
    padding: 20px;
    grid-template-columns: repeat(3, auto);
    gap: 5px;
    display: grid;
    transform: scale(1.5);
    visibility: hidden;
    pointer-events: none;
  }

  .month-list.show {
    transform: scale(1);
    visibility: visible;
    pointer-events: visible;
    transition: all 0.2s ease-in-out;
  }

  .month-list > div {
    display: grid;
    place-items: center;
  }

  .month-list > div > div {
    width: 100%;
    padding: 5px 20px;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    color: var(--color-txt);
  }

  .month-list > div > div:hover {
    background-color: var(--color-hover);
  }

  @keyframes to-top {
    0% {
        transform: translateY(100%);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
  }

  .day {
    border: 1px solid #ccc;
    width: 30px;
    height: 30px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }

  .selected {
    background-color: #007bff;
    color: #fff;
  }




</style>

    <div class="contenedor">
        <div class="contenedor">
            <div class="navegadorUsuario">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('controlador.home') }}">Otros Eventos</a>
                  </li>
                <li class="nav-item">
                  <div class="">
                    <a class="nav-link" aria-current="page" href="{{ route('controlador.evento', $evento->id) }}">Informacion</a>
                  </div>
                </li>
                <li class="nav-item Activado">
                    <a class="nav-link" href="{{ route('controlador.evento_horario',$evento->id) }}">Horario</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=" {{ route('controlador.evento_reservas_inscripcion',$evento->id) }} ">Reservas | Inscripciones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('controlador.evento_asistencia') }}">Asistencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('controlador.evento_certificados') }}">Certificados</a>
                  </li>
              </ul>
            </div>

        <div class="container General border">
            <h1 class="titulo">EVENTO 1</h1>

         <div class="paralelo">
            <div class="light">

                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker">February</span>
                        <div class="year-picker">
                            <span class="year-change" id="prev-year">
                                <pre><</pre>
                            </span>
                            <span id="year">2021</span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>
                    <div class="calendar-body">
                        <div class="calendar-week-day">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-days" ></div>
                        <button class="btn btn-primary m-4" id="save-button">Guardar</button>
                    </div>
                    <div class="month-list"></div>
                </div>

            </div>

            <div class="formulario">
                <label for="" class="formulario-h">
                <h3>Cantidad de dias :  </h3>
                <input type="text">
                </label>
                 <label for="" class="formulario-h">
                <h3>Dias :</h3>
                <input type="text">
                </label>
                <label for="" class="formulario-h">
                <h3>Hora Inicio :</h3>
                <input type="text">
                </label>
                <label for="" class="formulario-h">
                <h3>Hora Fin :</h3>
                <input type="text">
                </label>
                <label for="" class="formulario-h">
                <h3>Tiempo :</h3>
                <input type="text">
                </label>

                <br><br>
                <button type="button" class="btn btn-primary">Finalizar</button>
            </div>
            <script>

let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (!month) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month

    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.classList.add('day')
            day.addEventListener('click', selectDay)
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }

            day.setAttribute('data-date', i - first_day.getDay() + 1);
            day.setAttribute('data-month', month);
            day.setAttribute('data-year',  year);

        }

        calendar_days.appendChild(day)
    }
}




function selectDay(event) {
    // Eliminar la clase de selección de todos los días
    const days = document.querySelectorAll('.day');
    //days.forEach(day => day.classList.remove('selected'));

   // Agregar evento de click a cada día
days.forEach(day => {
    day.addEventListener('click', () => {
      // Verificar si el día está marcado
      const isMarked = day.classList.contains('selected');
      if (isMarked) {
        // Desmarcar el día
        day.classList.remove('selected');
      } else {
        // Marcar el día
        day.classList.add('selected');
      }
    });
  });
  }


let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

let dark_mode_toggle = document.querySelector('.dark-mode-switch')

dark_mode_toggle.onclick = () => {
    document.querySelector('body').classList.toggle('light')
    document.querySelector('body').classList.toggle('dark')
}

// Crear una función para guardar los días marcados
function saveMarkedDays() {
    // Crear un array para almacenar los días marcados
    const markedDays = [];

    // Recorrer todos los elementos con la clase day
    const dayElements = document.querySelectorAll('.day');

    dayElements.forEach(day => {
      // Verificar si el día está marcado
      const isMarked = day.classList.contains('selected');
      if (isMarked) {
        console.log('Días marcados:', day);
        // Obtener la información del día y agregarla al array
        const dayInfo = {
          date: day.getAttribute('data-date'),
          month: day.getAttribute('data-month'),
          year: day.getAttribute('data-year')
        };
        markedDays.push(dayInfo);
      }
    });
    // Enviar el array con los días marcados al servidor o hacer algo con la información
    console.log('Días marcados:', markedDays);
    mostrarDatosGuardados(markedDays);
}

  // Obtener el botón guardar
  const saveButton = document.getElementById('save-button');

  // Agregar evento de click al botón guardar
  saveButton.addEventListener('click', () => {
    // Llamar a la función para guardar los días marcados
    saveMarkedDays();
  });


  function mostrarDatosGuardados(markedDays) {
    const tablaDiasSeleccionados = document.querySelector('#tabla-dias-seleccionados tbody');

    // Limpiar el contenido de la tabla antes de agregar las nuevas filas
    tablaDiasSeleccionados.innerHTML = '';

    // Agregar una fila por cada día seleccionado
    markedDays.forEach(dia => {
      const fila = document.createElement('tr');

      const fecha = document.createElement('td');
      fecha.textContent = dia.date;
      fila.appendChild(fecha);

      const mes = document.createElement('td');
      mes.textContent = dia.month;
      fila.appendChild(mes);

      const año = document.createElement('td');
      año.textContent = dia.year;
      fila.appendChild(año);

      tablaDiasSeleccionados.appendChild(fila);
    });
  }


            </script>

         </div>

          </div>
        </div>

    </div>





</x-layouts.app>
