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

		// Inicializa la funcionalidad del Turnero
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Turnero", "../assets/js/components/turneroProfesional.js", () => {	
				let turneroProfesional = new TurneroProfesional(".turneroProfesional-contenedor");		
			});
		});


		
    }
}

let app = new appClinica();
