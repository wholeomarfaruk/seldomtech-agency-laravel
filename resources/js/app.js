/* resources/js/app.js */
import $ from 'jquery';
window.$ = window.jQuery = $;
import counterUp from 'counterup2'
// resources/js/app.js
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';


$(window).ready(function () {
    // Preloader
    $('.loader').fadeOut();
    $('.loader-mask').delay(350).fadeOut('slow');

});




// var TrandingSlider = new Swiper('.tranding-slider', {
//     effect: 'coverflow',
//     grabCursor: true,
//     centeredSlides: true,
//     loop: true,
//     slidesPerView: 'auto',
//     mousewheel: true,
//     coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 100,
//         modifier: 2.5,
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     breakpoints: {
//         0: {
//             slidesPerView: 1.2,

//         },
//         576: {
//             slidesPerView: "auto",

//         },

//     }
// });

// var TrandingSlider = new Swiper('.tranding-slider', {

//     grabCursor: true,

//     loop: false,
//     slidesPerView: 'auto',
//     mousewheel: false,
//     spaceBetween: 18, // 👈 gap in px

//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     breakpoints: {
//         0: {
//             slidesPerView: 1.2,
//             spaceBetween: 16,
//         },
//         576: {
//             slidesPerView: 'auto',
//             spaceBetween: 18,
//         },
//         992: {
//             spaceBetween: 18,
//         }
//     }
// });
let swiper;

function initSwiper() {
    if (swiper) swiper.destroy(true, true); // destroy previous instance

    new Swiper('.tranding-slider', {

        grabCursor: true,

        loop: false,
        slidesPerView: 'auto',
        mousewheel: false,
        spaceBetween: 18, // 👈 gap in px

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 16,
            },
            576: {
                slidesPerView: 'auto',
                spaceBetween: 18,
            },
            992: {
                spaceBetween: 18,
            }
        }
    });
}
initSwiper();

document.addEventListener('livewire:init', () => {
    // Initial call
    Livewire.on('refresh', () => {
        console.log('refresh');
        initSwiper();
    });

})


document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        counterUp(counter, {
            duration: 2000,
            delay: 16,
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {

    console.log($('#partners-slider'));
    new Splide('#partners-slider', {
        type: 'loop',



        autoplay: true,
        interval: 0,      // 🔥 continuous
        speed: 15000,      // smooth movement
        easing: 'linear',
        perPage: 5,
        perMove: 1,
        arrows: false,
        pagination: false,
        breakpoints: {
            0: {
                perPage: 2,
            },
            576: {
                perPage: 3,
            },
            992: {
                perPage: 5,
            },
        },

    }).mount();
});


// open class on click hamburger to toggle menu on mobile start ============

const hamburger = document.getElementById("hamburger");
const hamburgerIcon = hamburger.getElementsByTagName("i")[0];
const customNav = document.querySelector(".nav-area");

let timer;
hamburger.addEventListener("click", () => {
    customNav.classList.toggle("open");

    // change icon
    if (customNav.classList.contains("open")) {
        hamburgerIcon.classList.remove("fa-bars");
        hamburgerIcon.classList.add("fa-times");
    } else {
        hamburgerIcon.classList.remove("fa-times");
        hamburgerIcon.classList.add("fa-bars");

        // hide overflow
        if (customNav.style.overflow == "auto") {
            // if auto found reutrn true else false
            customNav.style.overflow = "hidden";
        }
    }
    // clear timeout
    clearTimeout(timer);

    timer = setTimeout(() => {
        // add overflow
        if (customNav.classList.contains("open")) {
            customNav.style.overflow = "auto";
        }
    }, 3000);
});
// open class on click hamburger to toggle menu on mobile end ============
// header sticky on scroll start ============

// header sticky on scroll End ============



const sections = document.getElementsByClassName("section");
const elementIsInView = (el) => {
    const scroll = window.scrollY || window.pageYOffset;
    const boundsTop = el.getBoundingClientRect().top + scroll;

    const viewport = {
        top: scroll,
        bottom: scroll + window.innerHeight,
    };

    const bounds = {
        top: boundsTop,
        bottom: boundsTop + el.clientHeight,
    };

    return (
        (bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
        (bounds.top <= viewport.bottom && bounds.top >= viewport.top)
    );
};

window.onscroll = function () {
    // header sticky on scroll start
    var scroll = document.documentElement.scrollTop;
    console.log(scroll);
    if (scroll > 250) {
        document.getElementById("header").classList.add("sticky");
    } else {
        document.getElementById("header").classList.remove("sticky");
    }
    // header sticky on scroll end

    // menu active start when section in viewport
    Array.prototype.forEach.call(sections, (section) => {
        console.log("section id: " + section.id);
        if (elementIsInView(section)) {
            console.log("Viewport matched for id: " + section.id);
            const menuItems = document.getElementsByClassName("menu-item");
            Array.prototype.forEach.call(menuItems, (menuItem) => {
                menuItem.classList.remove("active");
                if (menuItem.getAttribute("data-menu") == section.id) {
                    menuItem.classList.add("active");
                }
            });
        }
    });
};


