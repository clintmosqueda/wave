export default function Contact() {
  const label = document.querySelector('.form-settings .form-label-radio')
  const confirmButton = document.querySelector('.form-button-confirm')

  label.addEventListener('click', () => {
    console.log('click')
    label.classList.toggle('is-checked')
    confirmButton.classList.toggle('is-checked')
  })
}