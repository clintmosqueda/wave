import { gsap, CustomEase } from "gsap/all";
gsap.registerPlugin(CustomEase)

export const moveX = (target, direction) => {
  gsap.timeline().to(target, randomTime(), {
    x: randomX(direction),
    ease: easing,
    onComplete: moveX,
    onCompleteParams: [target, direction * -1]
  });
}

export const random = (min, max) => {
  const delta = max - min;
  return (direction = 1) => (min + delta * Math.random()) * direction;
}

export const rotate = (target, direction) => {
  gsap.timeline().to(target, randomTime2(), {
    rotation: randomAngle(direction),
    delay: randomDelay(),
    ease: easing,
    onComplete: rotate,
    onCompleteParams: [target, direction * -1]
  });
}

export const moveY = (target, direction) => {
  gsap.timeline().to(target, randomTime(), {
    y: randomY(direction),
    ease: easing,
    onComplete: moveY,
    onCompleteParams: [target, direction * -1]
  });
}

export const easing = 'sine.inOut'
export const randomX = random(1, 10);
export const randomY = random(1, 13);
export const randomDelay = random(0, 1);
export const randomTime = random(2, 6);
export const randomTime2 = random(3, 7);
export const randomAngle = random(1, 5);