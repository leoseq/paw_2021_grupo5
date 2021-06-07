class Calendario {

    constructor(pContenedor) {


        let contenedor = pContenedor.tagName ? pContenedor : document.querySelector(pContenedor);

        // Inserto CSS
        let css = Clinica.nuevoElemento("link", "", {
            rel: "stylesheet",
            href: "../assets/js/components/styles/calendario.css",
        });
        document.head.appendChild(css);

        let dias = this.wd = [
            'Dom',
            'Lun',
            'Mar',
            'Mie',
            'Jue',
            'Vie',
            'Sab'
        ];
        let meses = this.mon = ['Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];


        let listadoTurnos = this.listadoTurnos =
            {
                "especialistas": [
                    {
                        "matricula": "3737",
                        "nombre": "Tekito",
                        "apellido": "Lakarie",
                        "especialidad": "Odontologia",
                        "diasQueAtiende": [
                            "Lunes",
                            "Martes",
                            "Jueves"
                        ],
                        "horarioInicio": {
                            "horas": 9,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 12,
                            "minutos": 0
                        },
                        "duracionTurno": 20,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 9,
                                "minutos": 0
                            },
                            {
                                "dia": "Lunes",
                                "horas": 9,
                                "minutos": 20
                            },
                            {
                                "dia": "Martes",
                                "horas": 10,
                                "minutos": 0
                            },
                            {
                                "dia": "Martes",
                                "horas": 10,
                                "minutos": 40
                            },
                            {
                                "dia": "Martes",
                                "horas": 11,
                                "minutos": 20
                            },
                            {
                                "dia": "Jueves",
                                "horas": 9,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 9,
                                "minutos": 20
                            },
                            {
                                "dia": "Jueves",
                                "horas": 10,
                                "minutos": 40
                            },
                            {
                                "dia": "Jueves",
                                "horas": 11,
                                "minutos": 40
                            }
                        ]
                    },
                    {
                        "matricula": "2222",
                        "nombre": "Tarayado",
                        "apellido": "Tukoko",
                        "especialidad": "Psicologia",
                        "diasQueAtiende": [
                            "Martes",
                            "Jueves",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 13,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 18,
                            "minutos": 0
                        },
                        "duracionTurno": 30,
                        "turnosTomados": [
                            {
                                "dia": "Martes",
                                "horas": 14,
                                "minutos": 0
                            },
                            {
                                "dia": "Martes",
                                "horas": 14,
                                "minutos": 30
                            },
                            {
                                "dia": "Martes",
                                "horas": 16,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Jueves",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Jueves",
                                "horas": 17,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 13,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 30
                            }
                        ]
                    },
                    {
                        "matricula": "20202",
                        "nombre": "Tekuro",
                        "apellido": "Lakria",
                        "especialidad": "Pediatria",
                        "diasQueAtiende": [
                            "Lunes",
                            "Jueves",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 10,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 14,
                            "minutos": 0
                        },
                        "duracionTurno": 25,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 11,
                                "minutos": 15
                            },
                            {
                                "dia": "Lunes",
                                "horas": 11,
                                "minutos": 40
                            },
                            {
                                "dia": "Lunes",
                                "horas": 12,
                                "minutos": 30
                            },
                            {
                                "dia": "Jueves",
                                "horas": 10,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 12,
                                "minutos": 55
                            },
                            {
                                "dia": "Viernes",
                                "horas": 13,
                                "minutos": 20
                            }
                        ]
                    },
                    {
                        "matricula": "9595",
                        "nombre": "Isee",
                        "apellido": "Deadpeople",
                        "especialidad": "Cardiologia",
                        "diasQueAtiende": [
                            "Lunes",
                            "Miercoles",
                            "Viernes"
                        ],
                        "horarioInicio": {
                            "horas": 15,
                            "minutos": 0
                        },
                        "horarioFinalizacion": {
                            "horas": 18,
                            "minutos": 0
                        },
                        "duracionTurno": 10,
                        "turnosTomados": [
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 0
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 10
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 20
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Lunes",
                                "horas": 15,
                                "minutos": 50
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 15,
                                "minutos": 50
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Miercoles",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 15,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 15,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 30
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 40
                            },
                            {
                                "dia": "Viernes",
                                "horas": 16,
                                "minutos": 50
                            },
                            {
                                "dia": "Viernes",
                                "horas": 17,
                                "minutos": 0
                            },
                            {
                                "dia": "Viernes",
                                "horas": 17,
                                "minutos": 30
                            }
                        ]
                    }
                ]
            }

        //let especialidadLista = contenedor.querySelector("#especialidad-lista");
        let profesionalLista = contenedor.querySelector("#profesional-lista");

        let index = 0;

        //Carga de profesionales y especialidades
        listadoTurnos.especialistas.forEach(element => {
            //  let nuevaEspecialidad = Clinica.nuevoElemento("option", "", {"value": listadoTurnos.especialistas[index].especialidad})
            let nuevoProfesional = Clinica.nuevoElemento("option", element.especialidad, {
                "id": element.matricula,
                "value": element.nombre + " " + element.apellido
            })
            //especialidadLista.appendChild(nuevaEspecialidad);
            profesionalLista.appendChild(nuevoProfesional);
            index++;
        });


        /*   let especialidadInput = document.querySelector('#specialty_input');

           especialidadInput.addEventListener('change', function () {
               // alert(this.value);
           });*/


        let profesionalInput = document.querySelector('#profesional_input');


       // console.log(contenedor);

        //CUANDO HAY UN CAMBIO DE PROFESIONAL
        profesionalInput.addEventListener('change', function () {
            // alert(this.value);
            let eCalendario = contenedor.querySelector("#diasQueAtiende");

            if (eCalendario) {
                contenedor.removeChild(eCalendario);
            }

            let calendario = Clinica.nuevoElemento("div", "", {"id": "diasQueAtiende", "class": "calendar"})
            contenedor.appendChild(calendario);

            let profesionalSeleccionado = profesionalLista.querySelector('[value="' + this.value + '"]');

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
                    let thead = Clinica.nuevoElemento("thead","");
                    let tr = Clinica.nuevoElemento("tr","");
                    let tdMES = Clinica.nuevoElemento("td",  meses[m] + ' ' + y,{"colspan": 7} );

                    nuevaTabla.appendChild(thead);
                    thead.appendChild(tr);
                    tr.appendChild(tdMES);

                    let trDIAS = Clinica.nuevoElemento("tr","", {class: "days"});
                    let tdDias= Clinica.nuevoElemento("td","", );

                    nuevaTabla.appendChild(trDIAS);

                    for (var i = 0; i < dias.length; i++) {
                        let tdDias= Clinica.nuevoElemento("td",dias[i]);
                        trDIAS.appendChild(tdDias)
                    }

                    let tr2 = Clinica.nuevoElemento("tr","", {"id": "semana1"});
                    nuevaTabla.appendChild(tr2);

                    let semana = 1;
                    let contadorSemana;

                    var i = 1;
                    do {

                        var wd = new Date(y, m, i).getDay();

                        if (wd == 0) {
                            //html += '<tr>';
                        } else if (i == 1) {

                            //html += '<tr>';
                            var k = prevlastdom - firstdom + 1;
                            for (var j = 0; j < firstdom; j++) {
                                let tdNotTODAY= Clinica.nuevoElemento("td",k, {class:"not-today"});
                                tr2.appendChild(tdNotTODAY);
                                //html += '<td class="not-today">' + k + '</td>';
                                k++;
                            }
                        }

                        var chk = new Date();
                        var chkY = chk.getFullYear();
                        var chkM = chk.getMonth();

                        if (chkY == y && chkM == m && i == d) {
                            let tdTODAY= Clinica.nuevoElemento("td",i, {class:"today"});
                            tr2 = nuevaTabla.querySelector('#semana'+ semana +'');
                            tr2.appendChild(tdTODAY);
                            contadorSemana = 0;
                            //html += '<td class="today">' + i + '</td>';
                        } else {
                            let tdTODAY= Clinica.nuevoElemento("td",i, {class:"normal"});


                            if ((contadorSemana < 7) && (contadorSemana >= 0)) {
                                contadorSemana ++;

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

                                    if ((day === especialista.diasQueAtiende[abc]) && (atiende)){
                                        console.log(especialista.diasQueAtiende[abc])
                                        console.log(day, "hoy atiende");
                                        tdTODAY.classList.add('turno')
                                        atiende = false;
                                    }
                                }
                            }

                            tr2 = nuevaTabla.querySelector('#semana'+ semana +'');
                            tr2.appendChild(tdTODAY);

                        }
                        if ( wd == 6 ) {
                            //html += '</tr>';
                            let tr2 = Clinica.nuevoElemento("tr","", {"id": 'semana'+i});
                            nuevaTabla.appendChild(tr2);
                            semana = i;
                        }
                        else if ( i == lastdom ) {
                            var k=1;
                            for(wd; wd < 6; wd++) {
                                let tdNOTTODAY= Clinica.nuevoElemento("td",k, {class:"not-today"});
                                tr2.appendChild(tdNOTTODAY);
                                //html += '<td class="not-today">' + k + '</td>';
                                k++;
                            }
                        }

                        i++;
                    } while (i <= lastdom);




                    calendario.appendChild(nuevaTabla);

                }

            });


        });


        let buttonCalendario = Clinica.nuevoElemento("button", "Calendario", {"onclick": "fun()"});
        contenedor.appendChild(buttonCalendario);


    }
}
