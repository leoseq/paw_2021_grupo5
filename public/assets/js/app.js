class appClinica {
	constructor() {
        
		// Inicializa la funcionalidad Boton Llamar
        document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("BotonLlamar", "../assets/js/components/botonLlamar.js", () => {	
				let botonLlamar = new BotonLlamar("#botonCall");		
			});
		});
		
		// Inicializa la funcionalidad del Drag And Drop
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("DragAndDrop", "../assets/js/components/dragAndDrop.js", () => {	
				let dragAndDrop = new DragAndDrop(".inputDrop");		
			});

			Clinica.cargarScript("Carrusel", "assets/js/components/carrusel.js", () => {
				let Imagenes =[
					"/assets/images/portadas/guardia.jpg",
					"/assets/images/portadas/consulta.jpg",
					"/assets/images/portadas/edificio.jpg",
					"/assets/images/portadas/laboral.jpg",
				]
				let carousel = new Carrusel(Imagenes,"#container");
			});
		});

		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Calendario", "../assets/js/components/calendario.js", () => {
				let calendario = new Calendario("#sectionTurno");
			});
		});


		// Inicializa la funcionalidad del Turnero de Profesionales
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("TurneroProfesional", "../assets/js/components/turneroProfesional.js", () => {
				let turneroProfesional = new TurneroProfesional(".turneroProfesional-contenedor");		
			});
		});

		// Inicializa la funcionalidad del Turnero de Pacientes
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("TurneroPaciente", "../assets/js/components/turneroPaciente.js", () => {
				let turneroPaciente = new TurneroPaciente(".turneroPaciente-contenedor");
			});
		});

		// Inicializa la funcionalidad del Turnero de Sala de Espera
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("TurneroSalaEspera", "../assets/js/components/turneroSalaEspera.js", () => {
				let turneroSalaEspera = new TurneroSalaEspera(".turneroSalaEspera-contenedor");
			});
		});

		// Inicializa la funcionalidad del Turnero de Sala de Espera
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("TurneroSalaEspera2", "../assets/js/components/turneroSalaEsperaAutomatica.js", () => {
				let turneroSalaEspera2 = new TurneroSalaEsperaAutomatica(".turneroSalaEspera2-contenedor");
			});
		});
    }
}

let app = new appClinica();
