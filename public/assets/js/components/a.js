
cargarTabla(profesionalSeleccionado){

    let calendario = Clinica.nuevoElemento("div", "", {"id": "diasQueAtiende", "class": "calendar"})
    contenedor.appendChild(calendario);



    listadoTurnos.especialistas.forEach(especialista => {
        if (especialista.matricula === profesionalSeleccionado.id) {
            //ARMAR TABLE CON DATOS DE LOS DIAS Y HORARIOS DE ATENCION
            //SABER QUE HORARIOS ESTAN OCUPADOS
            var date = new Date();
            let m = date.getMonth();
            let y = date.getFullYear();
            let d = date.getDate();

            console.log(especialista.diasQueAtiende)


            var date = new Date()
                , firstdom = new Date(y, m, 1).getDay()
                , lastdom = new Date(y, m + 1, 0).getDate()
                , prevlastdom = m == 0 ? new Date(y - 1, 11, 0).getDate() : new Date(y, m, 0).getDate();


            let nuevaTabla = Clinica.nuevoElemento("table", "", {class: 'TableCalendario'});
            let thead = Clinica.nuevoElemento("thead", "");
            let tr = Clinica.nuevoElemento("tr", "");
            let tdMES = Clinica.nuevoElemento("td", meses[m] + ' ' + y, {"colspan": 7});

            nuevaTabla.appendChild(thead);
            thead.appendChild(tr);
            tr.appendChild(tdMES);

            let trDIAS = Clinica.nuevoElemento("tr", "", {class: "days"});
            let tdDias = Clinica.nuevoElemento("td", "",);

            nuevaTabla.appendChild(trDIAS);

            for (var i = 0; i < diasTabla.length; i++) {
                let tdDias = Clinica.nuevoElemento("td", diasTabla[i]);
                trDIAS.appendChild(tdDias)
            }

            let tr2 = Clinica.nuevoElemento("tr", "", {"id": "semana1"});
            nuevaTabla.appendChild(tr2);

            let semana = 1;
            let contadorSemana;

            var i = 1;
            do {

                var wd = new Date(y, m, i).getDay();

                if (wd == 0) {
                    //html += '<tr>';
                } else if (i == 1) {

                    var k = prevlastdom - firstdom + 1;
                    for (var j = 0; j < firstdom; j++) {
                        let tdNotTODAY = Clinica.nuevoElemento("td", k, {class: "not-today"});
                        tr2.appendChild(tdNotTODAY);
                        k++;
                    }
                }

                var chk = new Date();
                var chkY = chk.getFullYear();
                var chkM = chk.getMonth();

                if (chkY == y && chkM == m && i == d) {
                    let tdTODAY = Clinica.nuevoElemento("td", i, {class: "today"});
                    tr2 = nuevaTabla.querySelector('#semana' + semana + '');
                    tr2.appendChild(tdTODAY);
                    contadorSemana = 0;
                } else {
                    let tdTODAY = Clinica.nuevoElemento("td", i, {class: "normal"});


                    if ((contadorSemana < 7) && (contadorSemana >= 0)) {
                        contadorSemana++;

                        for (var abc = 0; abc <= especialista.diasQueAtiende.length; abc++) {
                            var day;
                            var atiende = true;
                            switch (new Date().getDay() + contadorSemana) {
                                case 0:
                                    day = "Domingo";
                                    break;
                                case 1:
                                    day = "Lunes";
                                    break;
                                case 2:
                                    day = "Martes";
                                    break;
                                case 3:
                                    day = "Miercoles";
                                    break;
                                case 4:
                                    day = "Jueves";
                                    break;
                                case 5:
                                    day = "Viernes";
                                    break;
                                case 6:
                                    day = "Sabado";
                            }

                            if ((day === especialista.diasQueAtiende[abc]) && (atiende)) {
                                console.log(especialista.diasQueAtiende[abc])
                                console.log(day, "hoy atiende");
                                tdTODAY.classList.add('turno')
                                atiende = false;
                            }
                        }
                    }

                    tr2 = nuevaTabla.querySelector('#semana' + semana + '');
                    tr2.appendChild(tdTODAY);

                }
                if (wd == 6) {
                    //html += '</tr>';
                    let tr2 = Clinica.nuevoElemento("tr", "", {"id": 'semana' + i});
                    nuevaTabla.appendChild(tr2);
                    semana = i;
                } else if (i == lastdom) {
                    var k = 1;
                    for (wd; wd < 6; wd++) {
                        let tdNOTTODAY = Clinica.nuevoElemento("td", k, {class: "not-today"});
                        tr2.appendChild(tdNOTTODAY);
                        k++;
                    }
                }

                i++;
            } while (i <= lastdom);


            calendario.appendChild(nuevaTabla);

        }

    });

}