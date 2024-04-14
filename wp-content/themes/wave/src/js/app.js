import Carousel from './carousel'
import Animation from './animation'
import Menu from './menu'
import FadeIn from './fadein'
import Mv from './mv'
import Journey from './journey'
import Partners from './partners'
import Review from './review'
import Pr from './pr'
import Contact from './contact'

const home = document.querySelector('.home')
const contact = document.querySelector('.contact')
if (home) {
  Mv()
  Journey()
  Partners()
  Carousel()
  Review()
  Pr()
}

if(contact) {
  Contact()
}

Animation()
Menu()

