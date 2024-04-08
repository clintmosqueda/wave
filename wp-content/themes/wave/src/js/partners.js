import { gsap, ScrollTrigger, CustomEase } from "gsap/all";
import { moveX, moveY, rotate } from "./animationHelper";
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase)

export default function Partners() {
  const partners = document.querySelector('.partners')
  const logos = document.querySelectorAll('.partners-item')

  // gsap.set(partners, { alpha: 0, y: '100px' });
  // gsap.to(partners, {
  //   ease: 'power1.out',
  //   y: '0',
  //   alpha: 1,
  //   duration: 1,
  //   scrollTrigger: {
  //     trigger: partners,
  //     start: "top bottom",
  //     // markers: true,
  //   }
  // })

  gsap.timeline({
    scrollTrigger: {
      trigger: '.partners-list',
    }
  }).from('.partners-item', {
    opacity: 0,
    y: '+=50',
    stagger: 0.1,
    delay: 0.1,
    ease: CustomEase.create('customBezier', '0.25, 0.46, 0.45, 0.94'),
    duration: 1
  })
}