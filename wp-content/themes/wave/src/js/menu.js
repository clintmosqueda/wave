import CONST from "./constants"
export default function Menu() {
  console.log('menu')
  const menu = document.querySelector('.menu')
  const nav = document.querySelector('.nav')

  menu.addEventListener('click', () => {
    menu.classList.toggle(CONST.IS_OPEN)
    nav.classList.toggle(CONST.IS_OPEN)
  })
}