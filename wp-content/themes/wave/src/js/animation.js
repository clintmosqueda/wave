import { gsap, ScrollTrigger, CustomEase } from "gsap/all";
import Rellax from "rellax"
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase)
import CONST from "./constants"

export default function Animation() {
  const workCards = document.querySelector('.works-cards')

  let rellax = new Rellax('.rellax')

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
      ease: CONST.CUSTOM_BEZIER,
      duration: 0.5
    })
  }

  let animteIn = document.querySelectorAll('.animate-in')

  if (animteIn.length) {
    let animteInSettings = {
      rootMargin: '0px',
      threshold: [0.2],
    }
    let animateInObserver = new IntersectionObserver(cardCallBack, animteInSettings)

    animteIn.forEach((animateIn) => {
      animateInObserver.observe(animateIn)
    })

    function cardCallBack(cards) {
      cards.forEach((card) => {
        if (card.isIntersecting) {
          card.target.classList.add('is-shown')
        }
      })
    }
  }
}