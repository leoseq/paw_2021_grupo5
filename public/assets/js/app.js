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

		// Inicializa la funcionalidad del Turnero
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Turnero", "../assets/js/components/turneroProfesional.js", () => {	
				let turneroProfesional = new TurneroProfesional(".turneroProfesional-contenedor");		
			});
		});

		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Calendario", "../assets/js/components/calendario.js", () => {
				let calendario = new Calendario("#sectionTurno");
			});
		});

		
    }
}

let app = new appClinica();
