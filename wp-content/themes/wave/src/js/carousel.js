import Swiper from "swiper/bundle";
import "swiper/css/bundle";
export default function Carousel() {
  const memberSlider = document.querySelector(".js-member-slider");
  const interviewSlider = document.querySelector(".js-interview-carousel");
  const reviewSlider = document.querySelector(".js-review-carousel");
  const projectSlider = document.querySelector(".js-projects-carousel");

  if (interviewSlider) {
    const interviewCarousel = new Swiper(".js-interview-carousel", {
      slidesPerView: 1,
      spaceBetween: 30,
      watchSlidesProgress: true,
      pagination: {
        el: ".js-interview-pagination",
        clickable: true,
        bulletClass: "carousel-pagination-item",
        bulletActiveClass: "is-active",
      },
      navigation: {
        nextEl: ".carousel-navigation-next",
        prevEl: ".carousel-navigation-prev",
      },
      breakpoints: {
        769: {
          spaceBetween: 30,
          slidesPerView: 3,
          allowTouchMove: false,
        },
      },
    });
  }

  if (reviewSlider) {
    const reviewCarousel = new Swiper(".js-review-carousel", {
      slidesPerView: "auto",
      spaceBetween: 30,
      watchSlidesProgress: true,
      pagination: {
        el: ".js-review-pagination",
        clickable: true,
        bulletClass: "carousel-pagination-item",
        bulletActiveClass: "is-active",
      },
      navigation: {
        nextEl: ".carousel-navigation-next",
        prevEl: ".carousel-navigation-prev",
      },
      // breakpoints: {
      //   769: {
      //     spaceBetween: 40,
      //     slidesPerView: 2,
      //     allowTouchMove: false,
      //   },
      // }
    });
  }

  if (projectSlider) {
    const projectCarousel = new Swiper(".js-projects-carousel", {
      slidesPerView: 1,
      spaceBetween: 30,
      watchSlidesProgress: true,
      pagination: {
        el: ".js-projects-pagination",
        clickable: true,
        bulletClass: "carousel-pagination-item",
        bulletActiveClass: "is-active",
      },
      navigation: {
        nextEl: ".carousel-navigation-next",
        prevEl: ".carousel-navigation-prev",
      },
    });
  }

  if (memberSlider) {
    const membersCarousel = new Swiper(memberSlider, {
      slidesPerView: 1,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      // spaceBetween: 30,
      // watchSlidesProgress: true,
      // pagination: {
      //   el: ".js-interview-pagination",
      //   clickable: true,
      //   bulletClass: 'carousel-pagination-item',
      //   bulletActiveClass: 'is-active'
      // },
      // navigation: {
      //   nextEl: '.carousel-navigation-next',
      //   prevEl: '.carousel-navigation-prev',
      // },
      // breakpoints: {
      //   769: {
      //     spaceBetween: 30,
      //     slidesPerView: 3,
      //     allowTouchMove: false,
      //   },
      // }
    });
  }
}
