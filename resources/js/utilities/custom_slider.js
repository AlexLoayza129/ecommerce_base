import { isNull } from "lodash";

let containerSize;
const containerSlide = document.getElementById('container-slide');
const trackSlide = document.getElementById('track-slide');

if(!isNull(trackSlide)){
    const firstChildElement = trackSlide.firstElementChild;
    const clone = firstChildElement.cloneNode(true);
    trackSlide.appendChild(clone);

    const slides = [...document.querySelectorAll('.slides')];
    let count = 1;

    let slideAnimate;

    function init () {
        // volvermos a obtener la nueva medida del contenedor
        containerSize = containerSlide.clientWidth;
        // asignamos un tamaño al contenedor track basando en la cantidad de slides q tiene
        trackSlide.style.width = `${containerSize * slides.length}px`;
        // asignamos el tamaño de cada slides basando en el container

        if(count) {
            trackSlide.style.transform = `translateX(-${containerSize * (count - 1)}px)`;
        }

        slides.forEach(el => {
            el.style.width = `${containerSize}px`;
        });

        slideAnimate = setInterval(() => {
            if(slides.length === count) {
                count = 1;
            }
            animateClass();
            count++
        }, 5000);
    }

    // iniciamos el slide
    init();

    window.onresize = () => {
        if(slideAnimate) {
            clearInterval(slideAnimate);
        }
        init();
    }

    function animateClass () {
        addClassAnimate(removeClassAnimate);
        trackSlide.style.transform = `translateX(-${containerSize * count}px)`;
    }

    function addClassAnimate (callback) {
        trackSlide.classList.add('transition-transform', 'duration-200', 'ease-out')
        setTimeout(() => {
            callback();
        }, 200);
    }
    function removeClassAnimate () {
        trackSlide.classList.remove('transition-transform', 'duration-200', 'ease-out');
        isLastSlide();
    }

    function isLastSlide () {
        if(slides.length === count) {
            trackSlide.style.transform = `translateX(0px)`;
        }
    }
}



