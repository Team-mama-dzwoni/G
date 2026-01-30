const monthInput = document.querySelector("#month");
const dayInput = document.querySelector("#day");
const yearInput = document.querySelector("#year");

function renderMonths() {
    monthInput.innerHTML = `<option value="" selected disabled></option>`;

    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    //Dodaje miesiace do HTML
    months.forEach((month, i) => {
        monthInput.appendChild(new Option(month, (i + 1).toString()))
    });
}

//Oblicza ostatni dzien miesiaca w danym roku
function getMaxDay(month, year) {
    if (!month) return 31;

    return new Date(year || 2000, month, 0).getDate();
}

function renderDays() {
    dayInput.innerHTML = `<option value="" selected disabled></option>`;

    const month = parseInt(monthInput.value)
    const year = parseInt(yearInput.value)

    const maxDay = getMaxDay(month, year);

    //Dodaje dni do HTML
    for (let i = 1; i <= maxDay; i++)
        dayInput.appendChild(new Option(i.toString(), i.toString()));
}


//Sprawdza czy rok jest przestepny
function isLeapYear(year) {
    return new Date(year, 2, 0).getDate() === 29;
}

function renderYears() {
    yearInput.innerHTML = `<option value="" selected disabled></option>`

    const month = parseInt(monthInput.value)
    const day = parseInt(dayInput.value);

    let currentYear = new Date().getFullYear();


    //Jesli rok przestepny dodaje tylko lata przestepne do HTML
    if (day === 29 && month === 2) {
        for (let i = 0; i <= 120; i++) {
            if (isLeapYear(currentYear))
                yearInput.appendChild(new Option(currentYear.toString(), currentYear.toString()));
            currentYear--;
        }
        return;
    }

    //Dodaje lata do HTML
    for (let i = 0; i <= 120; i++) {
        yearInput.appendChild(new Option(currentYear.toString(), currentYear.toString()));
        currentYear--;
    }
}
renderDays();
renderMonths();
renderYears();


//Pobiera wartosci z inputow i ustala czy sa liczbami
function getState() {
    return {
        day: parseInt(dayInput.value) || null,
        month: parseInt(monthInput.value) || null,
        year: parseInt(yearInput.value) || null
    };
}


//Waliduje inputy - dzien, miesiac, rok
function syncDate() {
    const { day, month, year } = getState();

    if (month)
        renderDays();

    if (day && month) {
        const maxDay = getMaxDay(month, year);
        if (day <= maxDay)
            dayInput.value = day.toString();
    }

    renderYears();

    if (year) {
        yearInput.value = year.toString();
    }
}


//Wywoluje walidacje na zmiane w inpucie
dayInput.addEventListener("change",  syncDate);
monthInput.addEventListener("change",  syncDate);
yearInput.addEventListener("change", syncDate);