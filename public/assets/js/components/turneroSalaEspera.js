class TurneroSalaEspera {
		
	constructor(pContenedor) {
		
		let strProfesional
		this.listadoTurnos = [
			{
				"profesional": "Dr. Carlos Meza",
				"especialidad": "Cardiología",
				"turnos": [
					{
						"paciente": "Leonardo Sequeira",
						"nroTurno": 1,
						"estado": "pendiente",
						"horario": {
							"horas": 9,
							"minutos": 0
						}
					},
					{
						"paciente": "Joaquin Bert",
						"nroTurno": 2,
						"estado": "pendiente",
						"horario": {
							"horas": 9,
							"minutos": 15
						}
					},
					{
						"paciente": "Melina Casanova",
						"nroTurno": 4,
						"estado": "pendiente",
						"horario": {
							"horas": 9,
							"minutos": 30
						}
					}
				]
			},
			{
				"profesional": "Dra. Leticia Rojas",
				"especialidad": "Dermatología",
				"turnos": [
					{
						"paciente": "Clara Martinez",
						"nroTurno": 3,
						"estado": "pendiente",
						"horario": {
							"horas": 9,
							"minutos": 30
						}
					},
					{
						"paciente": "Diego Valenzuela",
						"nroTurno": 5,
						"estado": "pendiente",
						"horario": {
							"horas": 10,
							"minutos": 0
						}
					}
				]
			}
		];

		// Obtener el Nodo Contenedor
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {

			// Inserto CSS
			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "../assets/js/components/styles/turnero.css"
			});
			document.head.appendChild(css);

			// Cambio de Profesional
			let profInput = document.querySelector("#turneroProfesional-selectProfesional");
			profInput.addEventListener("change", event => {
				strProfesional = this.getProfesional();
				this.completeInfoProfesional(strProfesional);

				this.siguienteTurno(strProfesional);

				this.completeTabla(strProfesional);
			});

			
			// Finaliza Turno y Comienza nuevo
			let botonNext = document.querySelector("#turneroProfesional-siguiente");
			botonNext.addEventListener("click", (event) => {

				strProfesional = this.getProfesional();
				this.finalizarTurno(strProfesional);
				this.siguienteTurno(strProfesional);

				this.completeTabla(strProfesional)
			});

		} 
	}

	siguienteTurno(strProfesional) {
		
		let turnos = this.getTurnosByProfesional(strProfesional);
		let turno = this.proximoTurno(turnos);

		if (!(Object.keys(turno).length === 0)) {

			document.getElementById("turneroProfesional-nombreProfesional").innerHTML = strProfesional;
			document.getElementById("turneroProfesional-nroTurno").innerHTML = this.concatenarTurno(turno.nroTurno);
			document.getElementById("turneroProfesional-nombrePaciente").innerHTML = turno.paciente;
				
		} else {
			console.error("El "+ strProfesional +" no tiene mas pacientes.");
		}
	}

	concatenarTurno(nroTurno) {

		let size = nroTurno.length;
		let result = "";
		
		if(size = 1) {
			result = "00" + nroTurno;
		} else {
			if(length = 2) {
				result = "0" + nroTurno;
			} else {
				result = nroTurno;
			}
		}

		return result
	}

	completeInfoProfesional(strProfesional) {

		let info = this.getInfoByProfesional(strProfesional);

		let varProfesional = info.profesional;
		let varEspecialidad = info.especialidad;

		document.getElementById("turneroProfesional-profesional").innerHTML = varProfesional;
		document.getElementById("turneroProfesional-especialidad").innerHTML = varEspecialidad;	
	}

	proximoTurno(turnos) {

		let result = {};
		let index;
		let size = turnos.length;

		for (index = 0; index < size; index++) {

			if (turnos[index].estado == "pendiente") {
				result = turnos[index];
				break;
			}
		}

		return result;
	}

	finalizarTurno(strProfesional) {

		let turnos = this.getTurnosByProfesional(strProfesional);
		let turno = this.proximoTurno(turnos);

		let index;
		let indexTurno;

		let listado = this.listadoTurnos;
		let size = listado.length;
		let sizeTurno;

		for (index = 0; index < size; index++) {

			if (listado[index].profesional == strProfesional) {

				sizeTurno = listado[index].turnos.length;

				for (indexTurno = 0; indexTurno < sizeTurno; indexTurno++) {

					if (listado[index].turnos[indexTurno].estado == "pendiente") {
						listado[index].turnos[indexTurno].estado = "finalizado";
						break;
					}
				}
			}
		}
		
	}

	getTurnosByProfesional(strProfesional) {

		let index;
		let listado = this.listadoTurnos;
		let size = listado.length;
		let turnos = [];

		for (index = 0; index < size; index++) {
			if (listado[index].profesional == strProfesional) {
				turnos = listado[index].turnos;		
				break;
			} 
		}

		return turnos;
	}

	getInfoByProfesional(strProfesional) {

		let info = {};
		let index;
		let listado = this.listadoTurnos;
		let size = listado.length;

		for (index = 0; index < size; index++) {
			if (listado[index].profesional == strProfesional) {
				info = listado[index];		
				break;
			} 
		}

		return info;
	}

	getProfesional() {
		let profInput = document.querySelector("#turneroProfesional-selectProfesional");
		return profInput.value;
	}

	limpiarTabla() {
		let tabla = document.querySelector("#turneroProfesional-tablaPacientes");
		let bodyTabla = document.querySelector("#turneroProfesional-listadoPacientes");

		bodyTabla.remove();

		bodyTabla = Clinica.nuevoElemento("tbody", "", {
			id: "turneroProfesional-listadoPacientes"
		});

		tabla.appendChild(bodyTabla);

		return bodyTabla;
	}

	completeTabla(strProfesional) {

		let bodyTabla = this.limpiarTabla();

		let turnos = this.getTurnosByProfesional(strProfesional);
		let size = turnos.length;
		let index;

		for (index = 0; index < size; index++) {

			let row = Clinica.nuevoElemento("tr", "", {});
			bodyTabla.appendChild(row);
			
			let nroTurno = this.concatenarTurno(turnos[index].nroTurno);
			let paciente = turnos[index].paciente;
			let horario = turnos[index].horario.horas +":"+ turnos[index].horario.minutos;
			let estado = turnos[index].estado;

			let data_1 = Clinica.nuevoElemento("td", nroTurno, {});
			let data_2 = Clinica.nuevoElemento("td", paciente, {});
			let data_3 = Clinica.nuevoElemento("td", horario, {});
			let data_4 = Clinica.nuevoElemento("td", estado, {});

			row.appendChild(data_1);
			row.appendChild(data_2);
			row.appendChild(data_3);
			row.appendChild(data_4);
		}
	}		

}
