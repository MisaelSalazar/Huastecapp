let slideIndex = 0;

function moveSlide(n) {
  const slides = document.querySelectorAll('.slide');
  const numSlides = slides.length;

  // Incrementa o decrementa el índice de la diapositiva
  slideIndex += n;

  // Si se llega al final, vuelve al principio
  if (slideIndex >= numSlides) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = numSlides - 1;
  }

  // Oculta todas las diapositivas
  slides.forEach(slide => {
    slide.style.display = 'none';
  });

  // Muestra la diapositiva actual
  slides[slideIndex].style.display = 'block';
}
