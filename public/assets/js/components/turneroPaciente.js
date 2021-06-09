class TurneroPaciente {
		
	constructor(pContenedor) {
			
		this.turnoPendiente = "PENDIENTE";
		this.turnoFinalizado = "FINALIZADO";

		this.listadoTurnos = [
			{
				"profesional": "Dr. Carlos Meza",
				"especialidad": "Cardiología",
				"duracionTurno": 10,
				"consultorio": "7",
				"turnos": [
					{
						"paciente": "Leonardo Sequeira",
						"nroTurno": 1,
						"estado": "PENDIENTE",
						"horario": {
							"horas": 9,
							"minutos": 0
						}
					},
					{
						"paciente": "Joaquin Bert",
						"nroTurno": 2,
						"estado": "PENDIENTE",
						"horario": {
							"horas": 9,
							"minutos": 30
						}
					},
					{
						"paciente": "Melina Casanova",
						"nroTurno": 4,
						"estado": "PENDIENTE",
						"horario": {
							"horas": 10,
							"minutos": 0
						}
					}
				]
			},
			{
				"profesional": "Dra. Leticia Rojas",
				"especialidad": "Dermatología",
				"duracionTurno": 30,
				"consultorio": "4",
				"turnos": [
					{
						"paciente": "Clara Martinez",
						"nroTurno": 3,
						"estado": "PENDIENTE",
						"horario": {
							"horas": 9,
							"minutos": 30
						}
					},
					{
						"paciente": "Diego Valenzuela",
						"nroTurno": 5,
						"estado": "PENDIENTE",
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

			// Cambio de Paciente
			let pacienteInput = document.querySelector("#turneroPaciente-selectPaciente");
			pacienteInput.addEventListener("change", event => {
				
				// Obtengo el paciente
				let pacienteInput = this.getPaciente();

				// Lo ubico en el Json
				let index = this.getInfoTurno(pacienteInput);

				// Completo info en el turnero
				this.completeInfoPaciente(index);

				// Completo la tabla
				this.completeTabla(index);
			});


			// Cambio de Turno
			let cambioTurnoBoton = document.querySelector("#turneroPaciente-siguiente");
			cambioTurnoBoton.addEventListener("click", event => {

				// Obtengo el paciente
				let pacienteInput = this.getPaciente();

				// Lo ubico en el Json
				let index = this.getInfoTurno(pacienteInput);

				// Finalizo el turno
				this.finalizarTurno(index);

				// Completo la tabla
				this.completeTabla(index);


				let a = document.getElementById('xyz');

				a.play();

			});
		} 
	}


	getInfoTurno(pacienteInput) {

		let index;
		let listado = this.listadoTurnos;
		let size = listado.length;
		
		let indexTurno;
		let turnos;
		let sizeTurno;

		let result = {};

		for (index = 0; index < size; index++) {

			turnos = listado[index].turnos;
			sizeTurno = turnos.length; 

			for (indexTurno = 0; indexTurno < sizeTurno; indexTurno++) {
			
				if (turnos[indexTurno].paciente == pacienteInput) {

						result = {"indexProfesional": index, "indexPaciente": indexTurno};
						break;
				}
			}
		}

		return result;
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


	completeInfoPaciente(index) {

		let varNroTurno = this.listadoTurnos[index.indexProfesional].turnos[index.indexPaciente].nroTurno;
		let varPaciente = this.listadoTurnos[index.indexProfesional].turnos[index.indexPaciente].paciente;

		document.getElementById("turneroPaciente-nroTurno").innerHTML = this.concatenarTurno(varNroTurno);
		document.getElementById("turneroPaciente-paciente").innerHTML = varPaciente;
	}


	getPaciente() {
		let pacienteInput = document.querySelector("#turneroPaciente-selectPaciente");
		return pacienteInput.value;
	}


	limpiarTabla() {
		let tabla = document.querySelector("#turnero-tabla");
		let bodyTabla = document.querySelector("#turnero-info");

		bodyTabla.remove();

		bodyTabla = Clinica.nuevoElemento("tbody", "", {
			id: "turnero-info"
		});

		tabla.appendChild(bodyTabla);

		return bodyTabla;
	}


	formatHs(minutos) {
		var hs = Math.floor(minutos / 60);  
  		var min = minutos % 60;
		let result;

		if (hs == 0) {
			if (min == 0) {
				result = "Ahora.";
			}
			else {
				result = min +" minutos.";
			}
		} else {
			if (min == 0) {
				result = hs +" hs.";
			} else {
				if ((hs < 0) || (min < 0)) {
					result = "-";
				} else {
					result = hs +":"+ min +" hs.";
				}
			}
		}

		return result;
	}


	calcularTiempoEspera(index) {

		// Arrays
		let profesional = this.listadoTurnos[index.indexProfesional];
		let duracionTurno = profesional.duracionTurno;
		let turnos = profesional.turnos;
		let size = turnos.length;
		let pacientesAdelante = 0;
		let indexTurno;

		for (indexTurno = 0; indexTurno < size; indexTurno++) {
		
			if (turnos[indexTurno].estado == this.turnoPendiente) {
				pacientesAdelante++;
			}		

			if (turnos[indexTurno].paciente == turnos[index.indexPaciente].paciente) {
				break;
			}
		}

		let result = duracionTurno * (pacientesAdelante - 1) ;

		return result;
	}


	completeTabla(index) {

		// Limpiar Tabla
		let bodyTabla = this.limpiarTabla();
		let row = Clinica.nuevoElemento("tr", "", {});
		bodyTabla.appendChild(row);
			
		// Arrays
		let arrayProfesional = this.listadoTurnos[index.indexProfesional];
		let arrayTurno = this.listadoTurnos[index.indexProfesional].turnos[index.indexPaciente];
		
		// Calcular tiempo de espera
		let tiempoEspera = this.calcularTiempoEspera(index);
		let tiempoEsperaFormat = this.formatHs(tiempoEspera);

		// Obtengo los valores para la tabla
		let varProfesional = arrayProfesional.profesional;
		let varEspecialidad = arrayProfesional.especialidad;
		let varHorario = arrayTurno.horario.horas +":"+ arrayTurno.horario.minutos;
		let varEstado = arrayTurno.estado;
		let varTiempoEspera = tiempoEsperaFormat;

		// Creo los tags para la tabla
		let tagProfesional = Clinica.nuevoElemento("td", varProfesional, {});
		let tagEspecialidad = Clinica.nuevoElemento("td", varEspecialidad, {});
		let tagHorario = Clinica.nuevoElemento("td", varHorario, {});
		let tagEstado = Clinica.nuevoElemento("td", varEstado, {});
		let tagTiempoEspera = Clinica.nuevoElemento("td", varTiempoEspera, {});

		// Inserto los tags en la tabla
		row.appendChild(tagProfesional);
		row.appendChild(tagEspecialidad);
		row.appendChild(tagHorario);
		row.appendChild(tagEstado);
		row.appendChild(tagTiempoEspera);
	}		


	finalizarTurno(index) {	

		let turnos = this.listadoTurnos[index.indexProfesional].turnos;
		let size = turnos.length;
		let indexTurno;

		for (indexTurno = 0; indexTurno < size; indexTurno++) {

			if (turnos[indexTurno].estado == this.turnoPendiente) {
				this.listadoTurnos[index.indexProfesional].turnos[indexTurno].estado = this.turnoFinalizado;
				break;
			}
		}
	}

}
