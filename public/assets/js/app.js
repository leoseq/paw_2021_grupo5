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
    }
}

let app = new appClinica();
