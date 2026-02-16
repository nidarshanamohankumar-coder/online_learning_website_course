document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll('.slide');
  let currentIndex = 0;

  setInterval(() => {
    slides[currentIndex].classList.remove('slide-active');

    currentIndex = (currentIndex + 1) % slides.length;

    slides[currentIndex].classList.add('slide-active');
  }, 4000);
});
