// $('.owl-carousel').owlCarousel({
//   loop: true,
//   margin: 10,
//   dots: false,
//   nav: true,
//   mouseDrag: false,
//   autoplay: true,
//   animateOut: 'slideOutUp',
//   responsive: {
//     0: {
//       items: 1
//     },
//     600: {
//       items: 1
//     },
//     1000: {
//       items: 1
//     }
//   }
// });
$('.owl-carousel').owlCarousel({
  loop: true,             // Enable loop
  margin: 10,             // Margin between items
  dots: false,            // Disable dots navigation
  nav: true,              // Enable navigation buttons
  mouseDrag: false,       // Disable mouse drag
  autoplay: true,         // Enable autoplay
  animateOut: 'slideOutUp', // Animation effect when item exits view
  responsive: {
    0: {
      items: 1            // Number of items to show at 0px and above
    },
    600: {
      items: 1            // Number of items to show at 600px and above
    },
    1000: {
      items: 1            // Number of items to show at 1000px and above
    }
  }
});



// -------animateOut------------
AOS.init({
  offset: 300,
  duration: 1200,
}
);

// -------link------------
// $("a[href^='#']").click(function (e) {

$("a[href^='#']").click(function (e) {
  e.preventDefault(); // Prevent default behavior of anchor click

  var target = $($(this).attr("href")); // Get the target element based on the href attribute of the clicked anchor
  var position = target.offset().top - $(window).height() + target.outerHeight(); // Calculate the scroll position

  // Animate scrolling to the target position
  $("body, html").animate({
    scrollTop: position // Scroll to the calculated position
  }, /* speed */); // You need to specify the speed of the animation here
});



// Back to top
var amountScrolled = 200;
var amountScrolledNav = 25;

$(window).scroll(function () {
  if ($(window).scrollTop() > amountScrolled) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});

$('button.back-to-top').click(function () {
  $('html, body').animate({
    scrollTop: 0
  }, 900);
  return false;
});





// -------navbar------------

// const navbar = document.getElementById('navbar');

// window.addEventListener('scroll', () => {
//   if (window.scrollY > 50) { // Adjust this value based on when you want the color to change
//     navbar.classList.add('scrolled');
//   } else {
//     navbar.classList.remove('scrolled');
//   }
// });








// -------Cursor------------

class Cursor {
  constructor() {
      this.initCursor();
      this.initHovers();
  }

  initCursor() {
      const {
          Back
      } = window;
      this.outerCursor = document.querySelector(".circle-cursor--outer");
      this.innerCursor = document.querySelector(".circle-cursor--inner");
      this.outerCursorBox = this.outerCursor.getBoundingClientRect();
      this.outerCursorSpeed = 0;
      this.easing = Back.easeOut.config(1.7);
      this.clientX = -100;
      this.clientY = -100;
      this.showCursor = false;

      const unveilCursor = () => {
          TweenMax.set(this.innerCursor, {
              x: this.clientX,
              y: this.clientY
          });
          TweenMax.set(this.outerCursor, {
              x: this.clientX - this.outerCursorBox.width / 2,
              y: this.clientY - this.outerCursorBox.height / 2
          });
          setTimeout(() => {
              this.outerCursorSpeed = 0.2;
          }, 100);
          this.showCursor = true;
      };
      document.addEventListener("mousemove", unveilCursor);

      document.addEventListener("mousemove", e => {
          this.clientX = e.clientX;
          this.clientY = e.clientY;
      });

      const render = () => {
          TweenMax.set(this.innerCursor, {
              x: this.clientX,
              y: this.clientY
          });
          if (!this.isStuck) {
              TweenMax.to(this.outerCursor, this.outerCursorSpeed, {
                  x: this.clientX - this.outerCursorBox.width / 2,
                  y: this.clientY - this.outerCursorBox.height / 2
              });
          }
          if (this.showCursor) {
              document.removeEventListener("mousemove", unveilCursor);
          }
          requestAnimationFrame(render);
      };
      requestAnimationFrame(render);
  }

  initHovers() {
      const handleMouseEnter = e => {
          this.isStuck = true;
          const target = e.currentTarget;
          const box = target.getBoundingClientRect();
          this.outerCursorOriginals = {
              width: this.outerCursorBox.width,
              height: this.outerCursorBox.height
          };
          TweenMax.to(this.outerCursor, 0.2, {
              x: box.left,
              y: box.top,
              width: box.width,
              height: box.height,
              opacity: 0.4,
              borderColor: "#000"
          });
      };

      const handleMouseLeave = () => {
          this.isStuck = false;
          TweenMax.to(this.outerCursor, 0.2, {
              width: this.outerCursorOriginals.width,
              height: this.outerCursorOriginals.height,
              borderColor: "#000"
          });
      };

      const linkItems = document.querySelectorAll(".link");
      linkItems.forEach(item => {
          item.addEventListener("mouseenter", handleMouseEnter);
          item.addEventListener("mouseleave", handleMouseLeave);
      });

      const mainNavHoverTween = TweenMax.to(this.outerCursor, 0.3, {
          backgroundColor: "#3d3d97",
          borderColor: '#3d3d97',
          ease: this.easing,
          paused: true
      });

      const mainNavMouseEnter = () => {
          this.outerCursorSpeed = 1.3;
          TweenMax.set(this.innerCursor, {
              opacity: 0
          });
          mainNavHoverTween.play();
      };

      const mainNavMouseLeave = () => {
          this.outerCursorSpeed = 1.3;
          TweenMax.set(this.innerCursor, {
              opacity: 1
          });
          mainNavHoverTween.reverse();
      };

      const mainNavLinks = document.querySelectorAll(".nav-link");
      mainNavLinks.forEach(item => {
          item.addEventListener("mouseenter", mainNavMouseEnter);
          item.addEventListener("mouseleave", mainNavMouseLeave);
      });
  }
}
$(document).ready(function () {
  const cursor = new Cursor();
});

//// Contact us page for Book Meeting Date and Time ////

document.addEventListener('DOMContentLoaded', function () {
    var now = new Date();
    now.setDate(now.getDate() + 0); // Add one day to the current date

    var year = now.getFullYear();
    var month = ('0' + (now.getMonth() + 1)).slice(-2); // Adding leading zero if needed
    var day = ('0' + now.getDate()).slice(-2); // Adding leading zero if needed
    var hour = ('0' + now.getHours()).slice(-2); // Adding leading zero if needed
    var minute = ('0' + now.getMinutes()).slice(-2); // Adding leading zero if needed

    var minDateTime = year + '-' + month + '-' + day + 'T' + hour + ':' + minute;

    document.getElementById('datetime').min = minDateTime;
});
