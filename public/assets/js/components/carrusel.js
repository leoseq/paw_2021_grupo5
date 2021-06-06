class Carrusel {
    constructor(Imagenes ,pContenedor) {



        this.Imagenes = Imagenes;
        this.loadedImages=0;


        this.imageCount=Imagenes.length;
        this.userInteracted = false;


        let contenedor = pContenedor.tagName ? pContenedor : document.querySelector(pContenedor);

        if (contenedor) {

            // Inserto CSS
            let css = Clinica.nuevoElemento("link", "", {
                rel: "stylesheet",
                href: "assets/js/components/styles/carrusel.css",
            });
            document.head.appendChild(css);

            //Selecciono los elementos y agrego clases
            let container = document.querySelector('#container');

            let contenedorGeneral = document.querySelector("#slide-container");
            contenedorGeneral.classList.add('slide');
            contenedorGeneral.classList.add('fade');
            let index = 0;

            let progressBar = Clinica.nuevoElemento("div", "", {"class": "progressBar"});
            let actualProgress = Clinica.nuevoElemento("div", "", {"class": "progress"});


            Imagenes.forEach(element =>
            {

                let containerImagen = Clinica.nuevoElemento("div","", {"id": "slide", "class": "box fade", "index": "img\""+index+"\"" } );
                contenedorGeneral.appendChild(containerImagen);
                let nuevaImagen = Clinica.nuevoElemento("img","",{"src": element, "alt": "img\""+index+"\""});

                nuevaImagen.addEventListener("load", event=>{
                    this.loadedImages++;
                    let averageOfLoad = (this.loadedImages / this.imageCount) * 100;
                    console.log(averageOfLoad);
                    if(averageOfLoad == 100){
                        //actualProgress.setAttribute("loaded", "100");
                        contenedor.removeChild(progressBar);
                        //this.handleEvent();
                    }
                    else
                        console.log('asd',averageOfLoad);
                        actualProgress.style.setProperty("--ancho", averageOfLoad+"vw");
                });

                nuevaImagen.addEventListener("transitionend", (event)=>{
                    setTimeout(()=>{
                        console.log(this.userInteracted);
                        if(this.userInteracted == false)
                            if(event.target.classList.contains("active"))
                                console.log('JOACO')
                               // this.handleEvent();

                    }, 4500);
                });
                progressBar.appendChild(actualProgress);
                containerImagen.appendChild(nuevaImagen);
                index++;
            });


            contenedor.appendChild(progressBar);















            let slides = document.querySelectorAll('#slide');
            let contenedorDots = document.querySelector("#dots-wrapper");
            contenedorDots.classList.add('center_x');
            //Agrego botones dependiendo de la cantidad de imagenes que existen
            for (let i = 0; i < slides.length; i++) {
                let dot = Clinica.nuevoElemento("div", "", {
                    class: "dot-nav",
                });
                contenedorDots.prepend(dot);
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.add('box');
                slides[i].classList.add('fade');
            }

            //Agrego clases a los botones inferiores
            let contenedorButtons = document.querySelector("#arrows-wrapper");
            let buttons = contenedorButtons.querySelectorAll("p");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.add('slider-arrow');
                buttons[i].classList.add('center_y');
            }


            let dots = document.querySelectorAll('.dot-nav');

            let slider_index = 0;

            function show_slide(index, swipe) {
                console.log('index', index);

                if (index >= slides.length) slider_index = 0;
                if (index < 0) {
                    console.log('slider_index < 0', slider_index)
                    slider_index = slides.length - 1

                }
                ;

                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = 'none';
                    dots[i].classList.remove('active-dot');
                }

                slides[slider_index].style.display = 'block';
                dots[slider_index].classList.add('active-dot');
            }


            //Desplazamientos
            // show_slide(slider_index);

            //Flechas laterales
            document.querySelector('#arrow-prev').addEventListener('click', () => {
                show_slide(--slider_index);
            });


            document.querySelector('#arrow-next').addEventListener('click', () => {
                show_slide(++slider_index);
            });

            //Botones inferiores
            document.querySelectorAll('.dot-nav').forEach((element) => {
                element.addEventListener('click', function () {
                    var dots = Array.prototype.slice.call(this.parentElement.children),
                        dot_index = dots.indexOf(element);
                    show_slide(slider_index = dot_index);
                })
            });

            //Automatico, cada 4 seg
              setInterval(() => {
                   show_slide(++slider_index)
               }, 5000);


            let width = slides[0].offsetWidth + 30;
            contenedorGeneral.style.minWidth = `${slides.length * width}px`;
            // Eventos de teclado
            document.addEventListener("keydown", function (e) {
                switch (e.which) {
                    case 39:
                        // Flecha derecha
                        show_slide(++slider_index, false);
                        break;
                    case 37:
                        // Flecha izquierda
                        show_slide(--slider_index, false);
                        break;
                }
            });


            //Swipe
            let start;
            let change;

            container.addEventListener('dragstart', (e) => {
                start = e.clientX;
                console.log('start', start);
            })

            container.addEventListener('dragover', (e) => {
                e.preventDefault();
                let touch = e.clientX;
                change = start - touch;
            })

            container.addEventListener('dragend', slideShow);
            //Touch events on mobile, tablet

            container.addEventListener('touchstart', (e) => {
                start = e.touches[0].clientX;
            })

            container.addEventListener('touchmove', (e) => {
                e.preventDefault();
                let touch = e.touches[0];
                change = start - touch.clientX;
                console.log('touch', touch);
                console.log('change', change);
            })

            container.addEventListener('touchend', slideShow);

            function slideShow() {
                if (change > 0) {
                    /* container.scrollLeft += width;
                     console.log('if', container.scrollLeft);


                     if (container.scrollLeft > (width * (slides.length - 2))) {
                         console.log('aca');
                         width = 0;
                         container.scrollLeft = width;
                         width = slides[0].offsetWidth + 30;
                     }
                     */
                    show_slide(++slider_index)

                } else {

                    show_slide(--slider_index)
                    //show_slide(slider_index, true)

                }
            }


        }
    }
}
