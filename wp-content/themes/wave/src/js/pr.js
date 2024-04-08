import { gsap, ScrollTrigger } from "gsap/all";
import { moveX, moveY, rotate } from "./animationHelper";
gsap.registerPlugin(ScrollTrigger);

const Pr = () => {
  const sun = document.querySelector('.pr-sun')

  gsap.set(sun, { y: '100px' })
  gsap.to(sun, {
    ease: 'none',
    y: '-100px',
    duration: 1,
    scrollTrigger: {
      scrub: true,
      trigger: '.pr',
      start: "top 80%",
      // markers: true
    }
  })
}

export default Pr