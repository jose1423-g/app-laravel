import './bootstrap';
// inportando bootstrap para nuestro proyecto
import * as bootstrap from 'bootstrap';

// alert("holis");
let btn_delete = document.getElementsByClassName("btn-delete");

for (let index = 0; index < btn_delete.length; index++) {
    const element = btn_delete[index];
    element.addEventListener('click', borrar);
}

function borrar() {
    let msg = 'Estas seguro de elimar el elemento';
    if (!confirm(msg)) return event.preventDefault();
}


