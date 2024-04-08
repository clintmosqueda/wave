import { gsap, ScrollTrigger } from "gsap/all";
gsap.registerPlugin(ScrollTrigger);

export default function Review() {
  const review = document.querySelector('.review')

  gsap.set(review, { alpha: 0, y: '100px' });
  gsap.to(review, {
    ease: 'power1.out',
    y: '0',
    alpha: 1,
    duration: 1,
    scrollTrigger: {
      trigger: '.review-shark',
      start: "top 90%",
      // markers: true,
    }
  })
}