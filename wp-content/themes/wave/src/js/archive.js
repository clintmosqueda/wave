import { gsap, ScrollTrigger } from "gsap/all";

export default function Archive() {
  const workCards = document.querySelector('.works-cards')

  if (workCards) {
    gsap.timeline({
      scrollTrigger: {
        trigger: '.works-cards',
      }
    }).from('.card', {
      opacity: 0,
      y: '+=50',
      stagger: 0.3,
      delay: 0.3,
      ease: 'power4.out',
      duration: 1.5
    })
  }
}