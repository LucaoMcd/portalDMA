export default function Footer() {
    const btnToggleCredits = document.querySelector('.footer-copyright')
    const copy = btnToggleCredits.querySelector('.copy')
    const credits = btnToggleCredits.querySelector('.credits')

    const toggleCredits = (event) => {
        const toggleCopy = () => {
            credits.classList.toggle('ativo')
        }
        copy.classList.toggle('ativo')
        toggleCopy()
    }

    btnToggleCredits.addEventListener('click', toggleCredits)
}