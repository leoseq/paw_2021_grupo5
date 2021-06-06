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
		
    }
}

let app = new appClinica();
