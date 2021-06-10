class DragAndDrop {
	
	constructor(pContenedor) {
		
		// Obtener el Nodo Contenedor
		let contenedor = pContenedor.tagName
			? pContenedor
			: document.querySelector(pContenedor);

		if (contenedor) {

			// Clases Iniciales
			contenedor.classList.add("drop-zone");


			// Creo e inserto el contenedor
			let span = Clinica.nuevoElemento("span", "Arrastre la orden medica aqui", {
				class: "drop-zone__prompt"
			});
			contenedor.prepend(span);


			// Inserto CSS
			let css = Clinica.nuevoElemento("link", "", {
				rel: "stylesheet",
				href: "assets/js/components/styles/dragAndDrop.css",
			});
			document.head.appendChild(css);


			// Obtener el Nodo del input File
			let inputElement = document.querySelector("#archivo");
			inputElement.classList.add("drop-zone__input");


			// Subir la imagen desde el input file
			contenedor.addEventListener("click", e => {
				inputElement.click();
			});
		
			contenedor.addEventListener("change", e => {
				if (inputElement.files.length) {
					this.updateThumbnail(contenedor, inputElement.files[0]);
				}
			});


			// Evento 'dragover'
			contenedor.addEventListener("dragover", e => {
				e.preventDefault();
				contenedor.classList.add("drop-zone--over");
			});
		
			["dragleave", "dragend"].forEach(type => {
				contenedor.addEventListener(type, e => {
					contenedor.classList.remove("drop-zone--over");
				});
			});


			// Evento 'drop'
			contenedor.addEventListener("drop", e => {
				e.preventDefault();
		
				if (e.dataTransfer.files.length) {
					inputElement.files = e.dataTransfer.files;
					this.updateThumbnail(contenedor, e.dataTransfer.files[0]);
				}
				contenedor.classList.remove("drop-zone--over");
			});
				
		} 
	}


	/*
	*  Actualizar la imagen miniatura
	*/
	updateThumbnail(dropZoneElement, file) {
		let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
	
		// Elimino el mensaje de upload
		if (dropZoneElement.querySelector(".drop-zone__prompt")) {
			dropZoneElement.querySelector(".drop-zone__prompt").remove();
		}
	
		// La 1ra vez no es un element, hay que crearlo
		if (!thumbnailElement) {
			thumbnailElement = document.createElement("div");
			thumbnailElement.classList.add("drop-zone__thumb");
			dropZoneElement.appendChild(thumbnailElement); 
		}
	
		thumbnailElement.dataset.label = file.name;
	
		// Mostrar la imagen
		if (file.type.startsWith("image/")) {
			const reader = new FileReader();
	
			reader.readAsDataURL(file);
			reader.onload = () => {
				thumbnailElement.style.backgroundImage = `url('${ reader.result }')`;
			};
		} else {
			thumbnailElement.style.backgroundImage = null;
		}
	}

}
