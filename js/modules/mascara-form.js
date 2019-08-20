export default function MascaraForm() {
    
    const form = document.querySelector('[data-mask]')

    if(form) {

        const telInput = form.querySelector('[data-tel]')
        const emailInput = form.querySelector('[data-email]')
        const btnSubmit = form.querySelector('button')
        
        // -------------------------------------------------------------
        const validaEmail = (e) => {
            
            const email = e.target.value
            
            const valid = (email) => {
                const emailRegex = /[\w-.]+@[\w-]+[.][\w-.]+/gi
                return email.match(emailRegex)
            }
            
            if(email) {
                if(valid(email)) {
                    emailInput.style.border = '1px solid #5CC25F'
                } else {
                    emailInput.style.border = '1px solid #FF2400'
                }
            } else {
                    emailInput.style.border = '1px solid'
            }
            
            emailInput.addEventListener('keyup', validaEmail)
        }
        
        emailInput.addEventListener('change', validaEmail)
        
        // -------------------------------------------------------------
        
        const initNumMask = (e) => {
            
            const msg = e.target.value
            
            const addTelMask = (msg) => {
                const regexDigits = /\D/g
                const onlyDigits = msg.replace(regexDigits, '')
                const regexParenteses = /^(\d{2})(\d+)/g
                const newMsg = onlyDigits.replace(regexParenteses, '($1) $2')
                const regexFormat = /(\d)(\d{4})$/g            
                const finalMsg = newMsg.replace(regexFormat, '$1-$2')

                telInput.value = finalMsg

                return newMsg
            }
            if(msg.length >= 2)
                return addTelMask(msg)
        }
        
        telInput.addEventListener('keyup', initNumMask)

        // ------------------------------------------------------------

        const validaNum = (e) => { 
            
            const num = e.target.value
            
            const validaNum = (num) => {
                const regexLimpaDigitos = /\D/g
                const numClean = num.replace(regexLimpaDigitos, '')
                return numClean.length === 11 
            }

            const valida = (num) => {
                if(num) {
                    const noSubmit = (e) => {
                        e.preventDefault()
                    }
                    if(validaNum(num)){
                        telInput.style.border = '1px solid #5CC25F'
                        btnSubmit.removeEventListener('click', noSubmit)
                    } else {
                        telInput.style.border = '1px solid #FF2400'
                        btnSubmit.addEventListener('click', noSubmit)
                    }
                } else {
                    telInput.style.border = '1px solid'
                }
            }
            
            valida(num)
        }
                                
        telInput.addEventListener('change', validaNum)
            
    }
    
    // -------------------------------------------------------------
}