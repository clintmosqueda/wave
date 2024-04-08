import Carousel from './carousel'
import Animation from './animation'
import Menu from './menu'
import FadeIn from './fadein'
import Mv from './mv'
import Journey from './journey'
import Partners from './partners'
import Review from './review'
import Pr from './pr'

const home = document.querySelector('.home')
if (home) {
  Mv()
  Journey()
  Partners()
  Carousel()
  Review()
  Pr()
}

Animation()
Menu()

