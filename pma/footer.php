<div class="clear"></div>
<div id="footer-out">
  <div id="footer-in">

  <h6>Links</h6>
  <!----------------------- LINKS MEIO AMBIENTE ------------------------------------------>
  <div class="titulo-links" style="margin-left:12px !important;">Meio Ambiente
  	<ul class="lista-links">
    <?php query_posts('category_name=Links meio ambiente - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
    	<li><?php the_content(); ?></li>
        <?php endfor;?>
   	</ul>
  </div>
  <!----------------------- FIM LINKS MEIO AMBIENTE ------------------------------------------>


  <!----------------------- LINKS EDUCAÇÃO ------------------------------------------>
  <div class="titulo-links">Educação
  	<ul class="lista-links">
    <?php query_posts('category_name=Links educacao - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
    	<li><?php the_content(); ?></li>
        <?php endfor;?>
   	</ul>
  </div>
  <!----------------------- FIM LINKS EDUCAÇÃO ------------------------------------------>

  <!----------------------- LINKS RESPONSABILIDADE SOCIAL ------------------------------------------>
  <div class="titulo-links">Responsabilidade Social
  	<ul class="lista-links">
    <?php query_posts('category_name=Links responsabilidade social - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
    	<li><?php the_content(); ?></li>
        <?php endfor;?>
   	</ul>
  </div>
  <!----------------------- FIM LINKS RESPONSABILIDADE SOCIAL ------------------------------------------>

  <!----------------------- LINKS MOVIMENTOS AMBIENTAIS ------------------------------------------>
  <div class="titulo-links">Movimentos Ambientais
  	<ul class="lista-links">
    <?php query_posts('category_name=Links movimentos ambientais - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
    	<li><?php the_content(); ?></li>
        <?php endfor;?>
   	</ul>
  </div>
  <!----------------------- FIM LINKS MOVIMENTOS AMBIENTAIS ------------------------------------------>

  <!----------------------- LINKS CAMPANHAS ------------------------------------------>
  <div class="titulo-links">Campanhas
  	<ul class="lista-links">
    <?php query_posts('category_name=Links campanhas - HOME'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>
    	<li><?php the_content(); ?></li>
        <?php endfor;?>
   	</ul>
  </div>
  <!----------------------- FIM LINKS CAMPANHAS ------------------------------------------>

  <address>Direitos Autorais Reservados 2011 - UFRN - Desenvolvedor Web: <a href="<?php echo get_site_url(); ?>/?page_id=19980"><span style="color:#56802D;">Equipe DMA Comunica</span></a> - Politica de Privacidade - Termos de Uso</address>

  <ul id="paginas">
  	<li><a href="<?php echo get_site_url(); ?>/?page_id=539"><img src="<?php echo get_template_directory_uri(); ?>/pics/dma-infra.png" width="80px" heigth="80px"/></a></li>
    <li><a target="_blank" href="http://www.sistemas.ufrn.br/portal/PT/"><img src="<?php echo get_template_directory_uri(); ?>/pics/ufrn.png" /></a></li>
  </ul>
</div><!-- footer-in -->
</div><!-- footer-out -->
</div><!-- wrapper -->

</body></html>
