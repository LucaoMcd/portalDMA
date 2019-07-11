const menu_expand = document.querySelector(".menu-expand");
const toggle_btn = document.querySelector(".menu-icon-bg");
const close_btn = document.querySelector(".menu-expand-close");

toggle_btn.addEventListener('click', function (e) {
    "use strict";
    menu_expand.classList.add('animate-menu');
});
close_btn.addEventListener('click', function (e) {
    "use strict";
    menu_expand.classList.remove('animate-menu');
});



// Slides por seletores

$('[data-group]').each(function () {
    "use strict";
    let $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        activeClass = 'active';
    
    $allTarget.first().addClass(activeClass);
    $allClick.first().addClass(activeClass);
    
    $allClick.click(function (e) {
        e.preventDefault();
        
        let id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');
        
        $allClick.removeClass(activeClass);
        $allTarget.removeClass(activeClass);
        
        $(this).addClass(activeClass);
        $target.addClass(activeClass);
    });
    
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        responsiveClass: true,
        responsive:{
            0:{
                items:1,
                nav:true,
                loop:true
            },
            600:{
                items:2,
                nav:true,
                loop:true
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });
});

// Formulario

$('.formphp').on('submit', function() {
	var emailContato = "dma_ufrn@outlook.com"; // Escreva aqui o seu e-mail

	var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
	
	that.find('[name]').each(function(index, value) {
		var that = $(this),
				name = that.attr('name'),
				value = that.val();
				
		data[name] = value;
	});
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
		
			if( $('[name="leaveblank"]').val().length != 0 ) {
				$('.formphp').html("<div id='form-erro'></div>");
				$('#form-erro').html('<span class="feedback negativo">Falha no envio!</span><p>Você pode tentar novamente, ou enviar direto para o e-mail ' + emailContato + ' </p>')
				.hide()
				.fadeIn(1500, function() {
				$('#form-erro');
				});
			} else {
				$('.formphp').html("<div id='form-send'></div>");
				$('#form-send').html('<span class="feedback negativo">Sua colaboração foi enviada!</span><p>Nossa equipe está pronta para conferir a sua sugestão e entrar em ação. Fique atento ao feedback que será enviado para o seu e-mail e WhatsApp.</p>')
				.hide()
				.fadeIn(1500, function() {
				$('#form-send');
				});
			};
		},
		error: function(response) {
			$('.formphp').html("<div id='form-erro'></div>");
			$('#form-erro').html('<span class="feedback negativo">Falha no envio!</span><p class="feedback negativo">Você pode tentar novamente, ou enviar direto para o e-mail ' + emailContato + ' </p>')
			.hide()
			.fadeIn(1500, function() {
			$('#form-erro');  
		});
		}
	});
	
	return false;
});

// Footer credits

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


// filtro de pesquisas 

function initFilterTag(){
    const filtroTag = document.querySelectorAll('[data-tag]') // botões com as tags
    const filtroTagged = document.querySelectorAll('[data-tagged]') // pesquisas com as tags
    const tagForAll = document.querySelectorAll('[data-tag-all]')
    const allSearchs = document.querySelectorAll('.pesquisas-content-item')

    allSearchs.forEach(e => e.classList.add('active')) // iniciar com todas ativas

    filtroTag.forEach(e => { 
        e.addEventListener('click', function () {
            allSearchs.forEach(e => e.classList.remove('active'))

            let taggedSearch = Array.prototype.filter.call(filtroTagged, (n => n.dataset.tagged === e.dataset.tag)) // seleciona apenas os que tem a tag
            taggedSearch.forEach(e => {
                e.parentElement.parentElement.parentElement.classList.toggle('active') // adiciona ativo somente nas que possuem a tag
            })
        })
    })
    
    tagForAll.forEach(e => {
        e.addEventListener('click', function() {
            allSearchs.forEach(e => e.classList.add('active'))
        })
    })
}

initFilterTag()

// Responsive tests

function initResponsiveTests(){
    const small = window.matchMedia('(max-width: 300px)');
    const all = document.querySelectorAll('*')

    if(small.matches) {
      console.log('Tela menor que 300px')
      all.forEach(e => {
          const eTam = e.getBoundingClientRect()
          if(eTam.width > 300) {
              console.log(`o elemento ${e} com ${eTam.width}px`)
              console.log(e)
          }
      })
    } else {
      console.log('Tela maior que 300px')
    }
}

// form cancel

const initFormCancel = () => {
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

initFormCancel()

// mascara form

function initMascaraForm() {
    
    const form = document.querySelector('[data-mask]')
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
                if(validaNum(num)){
                    telInput.style.border = '1px solid #5CC25F'
                } else {
                    telInput.style.border = '1px solid #FF2400'
                    btnSubmit.addEventListener('click', (e) => e.preventDefault())
                }
            } else {
                telInput.style.border = '1px solid'
            }
        }
        
        valida(num)
    }
                              
    telInput.addEventListener('change', validaNum)
    
    // -------------------------------------------------------------
}

initMascaraForm()






































