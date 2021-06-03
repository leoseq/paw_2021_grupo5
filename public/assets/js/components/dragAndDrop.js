class DragAndDrop {
	constructor(pContenedor) {
		
		// Obtener el Nodo Contenedor
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {

			let div = Clinica.nuevoElemento("div", "contenido", {
				ondrop: "drop(event)",
				ondragover: "allowDrop(event)",
			})

			contenedor.appendChild(div);

			// Clases Iniciales
			contenedor.classList.add("Input-File");

			// Inserto CSS
			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "assets/js/components/styles/dragAndDrop.css",
			});
			document.head.appendChild(css);

			// Creo label
			let texto = Clinica.nuevoElemento("label", "Arrastre aqui la imagen", {
				class: "textoDrag",
			});
			contenedor.appendChild(texto);
				
		} else {
			console.info("El elemento no se encuentra visible en esta page	");
		}
	}



	allowDrop(ev) {
		ev.preventDefault();
	}
	  
	drag(ev) {
		ev.dataTransfer.setData("text", ev.target.id);
	}
	  
	drop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}

}
