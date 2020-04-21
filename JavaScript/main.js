document.addEventListener('DOMContentLoaded',() =>{
    const elementosCarrusel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarrusel,{
        duration: 800, 
        dist: -80,
        shift: 0,
        padding: 5,
        numVisible: 3,
        indicators: true,
        noWrap: true
    });
});
