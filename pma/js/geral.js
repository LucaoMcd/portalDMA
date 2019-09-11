var Geral = {

	__construct: function() {
		_this = Geral;
		jQuery("input[type='text'],input[type='password'],textarea").resetDefaultValue();
		jQuery("a.lightbox").lightBox();
	}

}

jQuery(document).ready(function(){
	Geral.__construct();
	
	jQuery('#animacao').cycle({ 
		fx:'fade',
		timeout: 7000,
		next: '#seta-direita',
		prev: '#seta-esquerda',
		cleartypeNoBg: true	
	});	
	
	jQuery('#enviar').click(function(){
		jQueryform = jQuery('#form-contato');
		end = jQueryform.attr('action');
		//alert(end);
		
		jQuery.post(end,
			   $form.serialize(),
			   function(data){
				   		jQuery('#osx-modal-data p').html(data);
				   })
	})

});

