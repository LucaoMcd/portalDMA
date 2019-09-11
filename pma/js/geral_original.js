var Geral = {

	__construct: function() {
		_this = Geral;
		$("input[type='text'],input[type='password'],textarea").resetDefaultValue();
		$("a.lightbox").lightBox();
	}

}

$(document).ready(function(){
	Geral.__construct();
	
	$('#animacao').cycle({ 
		fx:'fade',
		timeout: 7000,
		next: '#seta-direita',
		prev: '#seta-esquerda',
		cleartypeNoBg: true	
	});	
	
	$('#enviar').click(function(){
		$form = $('#form-contato');
		end = $form.attr('action');
		//alert(end);
		
		$.post(end,
			   $form.serialize(),
			   function(data){
				   		$('#osx-modal-data p').html(data);
				   })
	})

});

