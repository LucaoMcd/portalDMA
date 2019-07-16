export default function FormCancel() {
    const btnCancel = document.querySelector('.btn-cancel')
    const form = document.querySelector('[data-mask]')
    const inputs = form.querySelectorAll('input')
    const textAreaMsg = form.querySelector('textarea')
    
    const limpar = (elem) => {
        elem.value = ''
        elem.style.border = '1px solid'
    }
    
    const limpaCampos = () => {
        inputs.forEach(input => {
            limpar(input)
        })
        limpar(textAreaMsg)
    }
    
    btnCancel.addEventListener('click', limpaCampos)
}