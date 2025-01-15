var preloader = document.getElementById("loading");

function myLoadingFunction() { 
  setTimeout(() => {
    preloader.style.transform = "translateY(-100%)"; 
    setTimeout(() => {
        preloader.style.display = "none";
    }, 850);  
  }, 1000);  
}

function toggleMenu() {
  var menu = document.querySelector('#offcanvas-menu');
  if (menu.style.display === 'none') {
      menu.style.display = 'block';
  } else {
      menu.style.display = 'none';
  }
}

function closeMenu() {
  var menu = document.querySelector('#offcanvas-menu');
  if (menu.style.display === 'block') {
      menu.style.display = 'none';
  } else {
      menu.style.display = 'block';
  }
}

$("#brand_carousal").owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  responsiveClass: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
    1400: {
      items: 5,
    },
  },
});

$("#testimonial_carousal").owlCarousel({
  items: 3,                 
  autoplay: false,          
  autoplayTimeout: 2500,    
  autoplayHoverPause: true, 
  loop: true,               
  margin: 10,            
  dots: true,               
  nav: false,            
  responsive: {
      1280: { items: 3 },   
      980: { items: 2 },    
      600: { items: 1 },    
      320: { items: 1 },   
  },
});


$("#portfolio_carousal").owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  responsiveClass: true,
  autoplay: true,
  autoplayTimeout: 1005000,
  autoplayHoverPause: true,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

function firstPageAnimation() {
  var timeline = gsap.timeline();

  timeline
    .from("#navbar", {
      y: "-10",
      opacity: 0,
      duration: 2.5,
      ease: Expo.easeInOut,
    })
    .to(".boundingElement", {
      y: "0",
      ease: Expo.easeInOut,
      duration: 1,
      delay: -1,
      stagger: 0.12,
    })
    .from("#hero__footer", {
      y: -10,
      opacity: 0,
      duration: 1.25,
      delay: -1,
      ease: Expo.easeInOut,
    })
    // .to("#scroll_arrow", {
    //   y: 93,
    //   duration: 2,
    //   repeat: -1,
    //   ease: Expo.linear,
    // })
    ;
}

// gsap.from("#brand_header", {
//   scale: 0,
//   duration: 0.5,
//   delay: 0.5,
//   scrollTrigger: "#brand_header",
// });

// gsap.from("#brand_carousal .item", {
//   scale: 0,
//   duration: 0.5,
//   delay: 0.5,
//   scrollTrigger: "#brand_carousal .item",
// });

// gsap.from("#about_header", {
//   scale: 0,
//   duration: 1,
//   delay: 0.5,
//   scrollTrigger: "#about_header",
// });

// gsap.to(".about_listCard", {
//   x: 0,
//   duration: 1,
//   stagger: 0.75,
//   rotate: 360,
//   scrollTrigger: {
//     trigger: ".about_listCard",
//     scroller: "body",
//     markers: true,
//     start: "top 60%",
//     end: "top 30%",
//     scrub: 5,
//   },
// });

var cursor = document.getElementById("cursor");
var dot = document.getElementById("dot");
var elementsToInvert = document.querySelectorAll("*");

function updateCursorAndDotPosition(event) {
  var x = event.clientX;
  var y = event.clientY + window.scrollY;

  cursor.style.left = x + "px";
  cursor.style.top = y + "px";

  dot.style.left = x + "px";
  dot.style.top = y + "px";
}

document.addEventListener("mousemove", updateCursorAndDotPosition);

for (var i = 0; i < elementsToInvert.length; i++) {
  elementsToInvert[i].addEventListener("mouseenter", function (event) {
    cursor.classList.add("inverted");
    dot.classList.add("inverted");
  });

  elementsToInvert[i].addEventListener("mouseleave", function (event) {
    cursor.classList.remove("inverted");
    dot.classList.remove("inverted");
  });
}

firstPageAnimation();