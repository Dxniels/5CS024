

// Preloader

const spinnerWrapperEl = document.querySelector('.spinner-wrapper');

window.addEventListener('load',() => {
    spinnerWrapperEl.style.opacity = '0';

    setTimeout(() => {
        spinnerWrapperEl.style.display = 'none';
    }, 200);
});



// Toast 

const myToast = new bootstrap.Toast('.toast')

setTimeout (() => {
    myToast.show();
}, 10000);


// For the date and time to show on the toast

`use strict`
var datetime = new Date();
console.log(datetime);
document.getElementById("time").textContent = datetime;

`use strict`;
function refreshTime() {
  const timeDisplay = document.getElementById("time");
  const dateString = new Date().toLocaleString();
  const formattedString = dateString.replace(", ", " - ");
  timeDisplay.textContent = formattedString;
}
  setInterval(refreshTime, 1000);
