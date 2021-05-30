class appClinica {

	constructor() {

		//Inicializa la funcionalidad Boton Llamar
        document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("BotonLlamar", "assets/js/components/botonLlamar.js", () => {	
				let botonLlamar = new BotonLlamar("");
			});
		});
		
    }
}

let app = new appClinica();
