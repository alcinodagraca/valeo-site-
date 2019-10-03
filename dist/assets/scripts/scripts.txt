const navSlide = () => {
  const burger = document.querySelector(".primary-nav__hamburguer-menu");
  const nav = document.querySelector(".primary-nav__main-nav");
  const navLinks = document.querySelectorAll(".nav-links li");

  burger.addEventListener("click", () => {
    //Toggle the navegation
    nav.classList.toggle("nav-active");

    //Animate the links
    navLinks.forEach((link, index) => {
      link.style.amination = `navLinkFade 0.5s ease forwards ${index / 7 +
        1.5}s`;
    });

    //Toggle the Burger
    burger.classList.toggle("toggle");
    console.log("Fui clicado!");
  });
};

navSlide();

$(document).ready(function() {
  // Partiners Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 6,
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 5000,
    center: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 3,
        nav: false
      },
      600: {
        items: 3,
        nav: false
      },
      991: {
        items: 6,
        nav: false,
        loop: true
      }
    }
  });
});

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function initMap() {
  var location = { lat: -25.95794, lng: 32.561879 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 20,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infoWindow = new google.maps.infoWindow({
    content: "<h2>Valeo Serviços, Sociedade Unipessoal, Lda.</h2>"
  });
  marker.addListener("click", function() {
    infoWindow.open(map, marker);
  });
}

function scrollAppear() {
  var introText = document.querySelector(".intro");
  var introPosition = introText.getBoundingClientRect().top;
  var screenPosition = window.innerHeight / 1.3;

  if (introPosition < screenPosition) {
    introText.classList.add("intro-appear");
  }
}

window.addEventListener("scroll", scrollAppear);
