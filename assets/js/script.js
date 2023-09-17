const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Modo Claro";
  } else {
    modeText.innerText = "Modo Escuro";
  }
});


// Cursos

document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.carousel');
  const videos = document.querySelectorAll('.video');
  let currentIndex = 1;

  function updateCarousel() {
      const offset = currentIndex * -320; 
      carousel.style.transform = `translateX(${offset}px)`;
      videos.forEach(video => video.classList.remove('active'));
      videos[currentIndex].classList.add('active');
  }

  document.querySelector('.left-arrow').addEventListener('click', function() {
      currentIndex = Math.max(currentIndex - 1, 0);
      updateCarousel();
  });

  document.querySelector('.right-arrow').addEventListener('click', function() {
      currentIndex = Math.min(currentIndex + 1, videos.length - 1);
      updateCarousel();
  });
});