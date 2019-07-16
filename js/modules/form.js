export default function Form() {
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
}

