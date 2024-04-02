import { gsap, ScrollTrigger, CustomEase } from "gsap/all";
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase)

export default function Animation() {
  // console.log('animation')

  const workCards = document.querySelector('.works-cards')
  const logos = document.querySelectorAll('.partners-item')
  // const logos = gsap.utils.toArray('.partners-item');

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

  if (logos) {
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

  // logos.forEach((logo) => {
  //   gsap.from(logo, {
  //     scrollTrigger: {
  //       start: 'top center',
  //       // end: 'bottom top',
  //       trigger: logo,
  //       toggleClass: 'is-shown',
  //       once: true,
  //       stagger: 0.5
  //     },
  //   });
  // });

}