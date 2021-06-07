especialista.diasQueAtiende.forEach(obj =>{
    let dia = Clinica.nuevoElemento("button",obj);
    calendario.appendChild(dia);
});

//recorrer dias que atiende.
let nuevaTabla = Clinica.nuevoElemento("table","",{class:'TableCalendario'});

let diasAtiende = Clinica.nuevoElemento("tr","");

let dia = Clinica.nuevoElemento("th","");
diasAtiende.appendChild(dia);

especialista.diasQueAtiende.forEach(obj =>{
    let dia = Clinica.nuevoElemento("th",obj);
    diasAtiende.appendChild(dia);
});
nuevaTabla.appendChild(diasAtiende);


let dIndex = new Date();

dIndex.setHours(especialista.horarioInicio["horas"]);
dIndex.setMinutes(especialista.horarioInicio["minutos"]);

let dFin = new Date();
dFin.setHours(especialista.horarioFinalizacion["horas"]);
dFin.setMinutes(especialista.horarioFinalizacion["minutos"]);



while (dIndex<=dFin ){
    let tr = Clinica.nuevoElemento("tr","",{class: dIndex.getHours()+':'+dIndex.getMinutes()});
    let thHora = Clinica.nuevoElemento("th",dIndex.getHours()+':'+dIndex.getMinutes(),{hora:dIndex.getHours(),min:dIndex.getMinutes()});
    tr.appendChild(thHora);

    //carga de turnos
    especialista.diasQueAtiende.forEach(obj =>{
        let diaTurno  =Clinica.nuevoElemento("td","libre",{dia:obj, hora:dIndex.getHours(), min:dIndex.getMinutes(), estado: "libre"});

        tr.appendChild(diaTurno);
    });

    nuevaTabla.appendChild(tr);

    dIndex.setMinutes(dIndex.getMinutes()+especialista.duracionTurno);
}




calendario.appendChild(nuevaTabla);

console.log(especialista.turnosTomados);


especialista.turnosTomados.forEach(obj =>{
    let dia =obj['dia'];
    let hora = obj['horas'];
    let minutos = obj['minutos'];
    let selector = "td[dia='"+dia+"'][hora='"+hora+"'][min='"+minutos+"']";
    let turno = nuevaTabla.querySelector(selector);
    turno.setAttribute("estado","ocupado");
    turno.textContent = "Ocupado";
});
