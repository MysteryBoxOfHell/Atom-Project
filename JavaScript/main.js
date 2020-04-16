document.addEventListener('DOWContentLoaded', () =>{
  const elementoCarousel = document.querySelectorAll('.carousel');
  M.carousel.init(elementoCarousel, {
    duration: 150

  });

});
