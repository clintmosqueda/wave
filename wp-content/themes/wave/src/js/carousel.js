import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
export default function Carousel() {

  const interviewCarousel = new Swiper('.js-interview-carousel', {
    slidesPerView: 3,
    spaceBetween: 30,
    watchSlidesProgress: true,
    pagination: {
      el: ".js-interview-pagination",
      clickable: true,
      bulletClass: 'carousel-pagination-item',
      bulletActiveClass: 'is-active'
    },
    navigation: {
      nextEl: '.carousel-navigation-next',
      prevEl: '.carousel-navigation-prev',
    },
  })

  const reviewCarousel = new Swiper('.js-review-carousel', {
    slidesPerView: 2,
    spaceBetween: 30,
    watchSlidesProgress: true,
    pagination: {
      el: ".js-review-pagination",
      clickable: true,
      bulletClass: 'carousel-pagination-item',
      bulletActiveClass: 'is-active'
    },
    navigation: {
      nextEl: '.carousel-navigation-next',
      prevEl: '.carousel-navigation-prev',
    },
  })

  const projectCarousel = new Swiper('.js-projects-carousel', {
    slidesPerView: 1,
    spaceBetween: 30,
    watchSlidesProgress: true,
    pagination: {
      el: ".js-projects-pagination",
      clickable: true,
      bulletClass: 'carousel-pagination-item',
      bulletActiveClass: 'is-active'
    },
    navigation: {
      nextEl: '.carousel-navigation-next',
      prevEl: '.carousel-navigation-prev',
    },
  })
}