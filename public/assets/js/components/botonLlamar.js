class BotonLlamar {
	constructor(pContenedor) {
		
		// Obtener el Nodo Contenedor
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {

			// Clases Iniciales
			contenedor.classList.add("Boton-Llamar");
			contenedor.classList.add("BotonCerrado");

			// Inserto CSS
			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "assets/js/components/styles/botonLlamar.css",
			});
			document.head.appendChild(css);

			// Obtener el Nodo de la seccion de Numeros
			let section = document.querySelector(pContenedor + "> article");
			section.classList.add("Info-Oculta");

			// Creo boton para cerrar
			let boton = Clinica.nuevoElemento("button", "", {
				class: "BotonCerrar",
			});
			section.prepend(boton);

			// Cambio eventos en el Click
			contenedor.addEventListener("click", (event) => {
				
				if (event.target.classList.contains("BotonCerrado")) {

					section.classList.add("Info-Mostrada");
					section.classList.remove("Info-Oculta");
					contenedor.classList.add("BotonAbierto");
					contenedor.classList.remove("BotonCerrado");

				} else {
				
					section.classList.remove("Info-Mostrada");
					section.classList.add("Info-Oculta");
					contenedor.classList.remove("BotonAbierto");
					contenedor.classList.add("BotonCerrado");
				}			
			});

		} else {
			console.error("Elemento HTML para generar el MENU no encontrado");
		}
	}
}
