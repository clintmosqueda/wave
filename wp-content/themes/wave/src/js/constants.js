import { gsap, CustomEase } from "gsap/all";
gsap.registerPlugin(CustomEase)

const constants = {
  IS_OPEN: 'is-open',
  CUSTOM_BEZIER: CustomEase.create('customBezier', '0.25, 0.46, 0.45, 0.94')
}

export default constants;