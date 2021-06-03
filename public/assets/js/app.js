class appClinica {
	constructor() {
        
		//Inicializa la funcionalidad Boton Llamar
        document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("BotonLlamar", "assets/js/components/botonLlamar.js", () => {	
				let botonLlamar = new BotonLlamar("body > main > button");		
			});
		});
		
		//Inicializa la funcionalidad del Drag And Drop
		document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("DragAndDrop", "assets/js/components/dragAndDrop.js", () => {	
				let dragAndDrop = new DragAndDrop("#archivo");		
			});
		});
		
    }
}

let app = new appClinica();
