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
