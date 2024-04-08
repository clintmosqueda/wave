import { moveX, moveY, rotate } from "./animationHelper";

export default function Mv() {
  const mv = document.querySelector('.mv')
  if (mv) {
    for (let index = 1; index <= 4; index++) {
      moveX(`.mv-sardines-${index}`, 1);
      moveY(`.mv-sardines-${index}`, 1);
    }
    moveY('.mv-turtle', 1)
    moveX('.mv-turtle', 1)

    moveY('.mv-penguin', 1)
    moveX('.mv-penguin', 1)
    rotate('.mv-penguin', 1)

    moveY('.mv-squirtle', 1)
    moveX('.mv-squirtle', 1)
    rotate('.mv-squirtle', 1)

    moveY('.mv-waves-1-image', 1)
    moveY('.mv-waves-3-image', 1)
    moveY('.mv-waves-5-image', 1)
    moveY('.mv-waves-7-image', 1)
  }
}