export default function Event() {
  const event = document.querySelector(".event");
  const cards = document.querySelectorAll(".event-card");
  const years = document.querySelectorAll(".event-timeline-year");

  if (event) {
    cards[0].classList.add("is-visible");
    years[0].classList.add("is-active");

    years.forEach((el, i) => {
      el.addEventListener("click", () => {
        cards.forEach((el) => {
          el.classList.remove("is-visible");
        });
        years.forEach((el) => {
          el.classList.remove("is-active");
        });

        el.classList.add("is-active");
        cards[i].classList.add("is-visible");
      });
    });
  }
}
