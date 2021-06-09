let eCalendario = contenedor.querySelector("#diasQueAtiende");

if (eCalendario) {
    contenedor.removeChild(eCalendario);
}

//Selecciono el input de profesionales
let profesional = this.getProfesional(listaProfesionales, event.srcElement.value);

//Se carga la tabla con los dias que atiende
this.cargarTabla(profesional, contenedor);

let diasTurno = contenedor.querySelectorAll(".turno");

let tablaCalendario = contenedor.querySelector("#diasQueAtiende");

let profesionalTurno;
for (let i = 0; i < diasTurno.length; i++) {
    diasTurno[i].addEventListener("click", event => {
        profesionalTurno = this.get(profesional.id);
        this.mostrarTurnos(diasTurno[i].id, profesionalTurno, contenedor);
        tablaCalendario.style.display = 'none';
    });
}