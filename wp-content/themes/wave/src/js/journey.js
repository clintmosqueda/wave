import { gsap, ScrollTrigger, CustomEase } from "gsap/all";
import { moveX, moveY, rotate } from "./animationHelper";
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase)

export default function Journey() {
  const articles = document.querySelectorAll('.journey-article')
  const waveDeep = document.querySelectorAll('.journey-wave-deep')

  gsap.utils.toArray(articles).forEach((article, i) => {
    article.text = article.querySelector('.journey-text')
    gsap.to(article.text, {
      ease: 'none',
      y: '120%',
      duration: 1.5,
      scrollTrigger: {
        scrub: true,
        trigger: article,
        start: "top 40%",
        end: "bottom 40%",
        // markers: true
      }
    })
  });

  gsap.utils.toArray(articles).forEach((article, i) => {
    article.text = article.querySelector('.journey-text')
    gsap.set(article.text, { alpha: 0 });
    gsap.to(article.text, {
      ease: 'power1.out',
      alpha: 1,
      duration: 1,
      scrollTrigger: {
        trigger: article,
        start: "top 75%",
        // markers: true
      }
    })
  });

  gsap.utils.toArray(waveDeep).forEach(wave => {
    gsap.set(wave, { alpha: 0, y: '200px' });
    gsap.to(wave, {
      ease: 'power1.out',
      y: '0',
      alpha: 1,
      duration: 2,
      scrollTrigger: {
        trigger: wave,
        start: "top 60%",
        // markers: true,
      }
    })
  })

  for (let index = 1; index <= 6; index++) {
    moveX(`.journey-fish-${index}`, 1)
    moveY(`.journey-fish-${index}`, 1)
    // rotate(`.journey-fish-${index}`, 1)
  }

  const trashes = ['.journey-plastic', '.journey-bottle', '.journey-tin']

  trashes.forEach(trash => {
    if (trash === '.journey-tin') {
      moveY(trash, 1)
      moveX(trash, 1)
    } else {
      rotate(trash, 1)
      moveY(trash, 1)
      moveX(trash, 1)
    }
  })


}