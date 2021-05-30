class BotonLlamar {
	constructor(pContenedor) {
		
		//Conseguir Nodo
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {
			contenedor.classList.add("PAW-Menu");
			contenedor.classList.add("BotonCerrado");

			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "assets/js/components/styles/botonLlamar.css",
			});
			document.head.appendChild(css);

			// Armar Boton
			let boton = Clinica.nuevoElemento("button", "", {
				class: "PAW-MenuAbrir",
			});

			boton.addEventListener("click", (event) => {
				if (event.target.classList.contains("PAW-MenuAbrir")) {
					event.target.classList.add("PAW-MenuCerrar");
					event.target.classList.remove("PAW-MenuAbrir");
					contenedor.classList.add("PAW-MenuAbierto");
					contenedor.classList.remove("PAW-MenuCerrado");
				} else {
					event.target.classList.add("PAW-MenuAbrir");
					event.target.classList.remove("PAW-MenuCerrar");
					contenedor.classList.add("PAW-MenuCerrado");
					contenedor.classList.remove("PAW-MenuAbierto");
				}
			});

			// Insertar boton en el NAV
			contenedor.prepend(boton);
		} else {
			console.error("Elemento HTML para generar el MENU no encontrado");
		}
	}
}
