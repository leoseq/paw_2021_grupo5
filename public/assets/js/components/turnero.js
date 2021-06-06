class Turnero {
	
	loader = Clinica.nuevoElemento("div", "", { class: "loader" });

	
	constructor(pContenedor) {
		
		this.listadoTurnos = [
			{
				"profesional": "Dr. Carlos Meza",
				"especialidad": "Cardiología",
				"turnos": [
					{
						"paciente": "Leonardo Sequeira",
						"nroTurno": "001",
						"horario": {
							"horas": 9,
							"minutos": 0
						}
					},
					{
						"paciente": "Joaquin Bert",
						"nroTurno": "002",
						"horario": {
							"horas": 9,
							"minutos": 15
						}
					},
					{
						"paciente": "Melina Casanova",
						"nroTurno": "004",
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
						"nroTurno": "003",
						"horario": {
							"horas": 9,
							"minutos": 30
						}
					},
					{
						"paciente": "Diego Valenzuela",
						"nroTurno": "005",
						"horario": {
							"horas": 10,
							"minutos": 0
						}
					}
				]
			}
		]

		// Obtener el Nodo Contenedor
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {
			
			// Inserto CSS
			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "../assets/js/components/styles/turnero.css",
			});
			document.head.appendChild(css);

			let botonNext = document.querySelector("#buttonNext");

			botonNext.addEventListener("click", (event) => {
				
				let profInput = document.querySelector("#profesional");
				
				this.siguiente();
			});

		} 
	}



	siguiente() {
		console.info("Siguiente turno....");

		document.getElementById("profesional").innerHTML = this.listadoTurnos[0].profesional;
		document.getElementById("nroTurno").innerHTML = this.listadoTurnos[0].turnos[0].nroTurno;
		document.getElementById("nombrePaciente").innerHTML = this.listadoTurnos[0].turnos[0].paciente;

	}

}
