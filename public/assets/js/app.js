class appClinica {
	constructor() {
        //Inicializa la funcionalidad Menu (Test)
    /*    document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("Menu", "assets/js/components/menu.js", () => {	
				let menu = new Menu("nav");
			});
		});
	*/
		//Inicializa la funcionalidad Boton Llamar
        document.addEventListener("DOMContentLoaded", () => {
			Clinica.cargarScript("BotonLlamar", "assets/js/components/botonLlamar.js", () => {	
				let botonLlamar = new BotonLlamar("body > main > button");
			});
		});
		
    }
}

let app = new appClinica();
