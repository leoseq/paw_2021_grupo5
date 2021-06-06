class appClinica {
	constructor() {
        
		// Inicializa la funcionalidad Boton Llamar
        document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("BotonLlamar", "assets/js/components/botonLlamar.js", () => {	
				let botonLlamar = new BotonLlamar("#botonCall");		
			});
		});
		
		// Inicializa la funcionalidad del Drag And Drop
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("DragAndDrop", "assets/js/components/dragAndDrop.js", () => {	
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

		// Inicializa la funcionalidad del Drag And Drop
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Turnero", "../assets/js/components/turnero.js", () => {	
				let turnero = new Turnero(".turneroSalaEspera");		
			});
		});


		
    }
}

let app = new appClinica();
