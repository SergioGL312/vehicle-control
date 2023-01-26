const yearSelect = document.getElementById('anio');
const monthSelect = document.getElementById('mes');
const daySelect = document.getElementById('dia');

const months = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
//["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

(function populateMonths(){
    let i = 1;
    for (const month of months) {
        const option = document.createElement("option");
        option.value = i;
        i++;
        option.textContent = month;
        monthSelect.appendChild(option);
    }
    // monthSelect.value = "Enero";
})();

let previousDay;

function populateDays(month){
    while (daySelect.firstChild) {
        daySelect.removeChild(daySelect.firstChild);
    }
    let dayNum;
    let year = yearSelect.value;

    if (month == 'Enero' || month == 'Marzo' || 
    month == 'Mayo' || month == 'Julio' || month == 'Agosto' ||
    month == 'Octubre' || month == 'Diciembre') {
        dayNum = 31;
    } else if (month == 'Abril' || month == 'Junio' 
    || month == 'Septiembre' || month == 'Noviembre') {
        dayNum = 30;
    } else {
        if (new Date(year, 1, 29).getMonth() == 1) {
            dayNum = 29;
        } else {
            dayNum = 28;
        }
    }

    for (let i = 1; i <= dayNum; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        daySelect.appendChild(option);
    }

    if (previousDay) {
        daySelect.value = previousDay;
        if (daySelect.value === "") {
            daySelect.value = previousDay - 1;
        }
        if (daySelect.value === "") {
            daySelect.value = previousDay - 2;
        }
        if (daySelect.value === "") {
            daySelect.value = previousDay - 3;
        }
    }
}

function populateYears() {
    let year = new Date().getFullYear();
    let aux;
    for (let i = 0; i < 101; i++) {
        const option = document.createElement('option');
        aux = year - i;
        aux = aux.toString().substring(2, 4);
        option.value = parseInt(aux);
        option.textContent = year - i;
        yearSelect.appendChild(option);
    }
}

populateDays(monthSelect.value);
populateYears();

yearSelect.onchange = function() {
    populateDays(monthSelect.value);
}

monthSelect.onchange = function() {
    populateDays(monthSelect.value);
}

daySelect.onchange = function() {
    previousDay = daySelect.value;
}