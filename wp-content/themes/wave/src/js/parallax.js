export default function Parallax() {
  let animteIn = document.querySelectorAll('.animate-in')

  if (animteIn) {
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