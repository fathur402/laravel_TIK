let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

const init = (n) => {
  slides.forEach((slide, index) => {
    slide.style.display = "none";
    dots.forEach((dot, index) => {
      dot.classList.remove("active");
    });
  });
  slides[n].style.display = "block";
  dots[n].classList.add("active");
};
document.addEventListener("DOMContentLoaded", init(currentSlide));
const next = () => {
  currentSlide >= slides.length - 1 ? (currentSlide = 0) : currentSlide++;
  init(currentSlide);
};

const prev = () => {
  currentSlide <= 0 ? (currentSlide = slides.length - 1) : currentSlide--;
  init(currentSlide);
};

document.querySelector(".next").addEventListener("click", next);

document.querySelector(".prev").addEventListener("click", prev);

setInterval(() => {
  next();
}, 5000);

dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    console.log(currentSlide);
    init(i);
    currentSlide = i;
  });
});



document.addEventListener('DOMContentLoaded', function() {
  // Fungsi untuk smooth scroll
  const links = document.querySelectorAll('nav a');

  for (const link of links) {
      link.addEventListener('click', smoothScroll);
  }

  function smoothScroll(event) {
      event.preventDefault();

      const targetId = event.currentTarget.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
      });
  }
});
