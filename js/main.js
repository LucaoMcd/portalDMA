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
    $('.nonloop').owlCarousel({
        center: true,
        items: 2,
        loop: false,
        margin: 50,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
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
const allSearchs = document.querySelectorAll('.pesquisas-content-item')

btnToggleCredits.addEventListener('click', toggleCredits)

function toggleCredits(event) {
    copy.classList.toggle('ativo')
    toggleCopy()
}
function toggleCopy() {
    credits.classList.toggle('ativo')
}


// filtro de pesquisas 

function initFilterTag(){
    const filtroTag = document.querySelectorAll('[data-tag]') // botões com as tags
    const filtroTagged = document.querySelectorAll('[data-tagged]') // pesquisas com as tags
    const tagForAll = document.querySelectorAll('[data-tag-all]')

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





















