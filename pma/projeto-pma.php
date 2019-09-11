<?php /** Template Name: Projeto Portal de Meio Ambiente*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Portal de Meio Ambiente</h2>   

<br />    

<p style="text-align:justify"><strong>Primeiro meio de comunicação eletrônica produzido pela DMA</strong>, o Portal de Meio Ambiente (PMA) da UFRN foi criado para ser um dos <strong>instrumentos de divulgação</strong> da Política de Meio Ambiente da UFRN implantada pela Diretoria de Meio Ambiente (DMA) / Superintendência de Infraestrutura (SIN) da UFRN, contribuindo para a formação de uma <strong>consciência ambiental</strong> junto à comunidade universitária. 

<br />
<br />

Gerenciado pela DMA Comunica, programa de comunicação da DMA, o Portal de Meio Ambiente destaca as ações locais e da UFRN além de reunir uma grande compilação de notícias e eventos ambientais de nível local (DMA/SIN/UFRN), regional, nacional e internacional. 

<br />
<br />

Concebido numa perspectiva educadora, o Portal de MA, desde seu início, foi projetado com um <strong>caráter dinâmico e interativo</strong> visando estimular o desencadear de processos educativos. 
</p>

<br />
<br />

<p style="text-align:right;"><a href="http://www.sigaa.ufrn.br/sigaa/public/extensao/consulta_extensao.jsf" target="_blank" style="color:#639334"><strong>Veja texto completo do projeto submetido à PROEX
 <br />(insira como título da ação "Portal de Meio Ambiente" e em tipo de atividade "projeto")</strong></a></p>

<br />
<br />
       
<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:10px;"></div>
        
         <!----------------------- EQUIPE PMA ------------------------------------------>
          
       <h2>Equipe PMA</h2>
	   <ul class="lista">
		<?php query_posts('category_name=Equipe - PMA'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                		<li><a href="http://www.meioambiente.ufrn.br/?page_id=19980"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
      </ul>
        <!--<a href="?page_id=7743" class="botao">Ver Mais</a>!-->
    <!----------------------- FIM  ------------------------------------------>
    
     <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <h2>Galeria de Imagens - Portal de Meio Ambiente</h2>
        
        <?php query_posts('category_name=Album Portal'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
         
        
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
       
       
        <div class="clear" style="margin-bottom:10px;"></div>     
        
         <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
          
       <h2>Associação a outros projetos </h2>
	   <ul class="lista">
            <li><a href="?page_id=8449">Blogs</a></li>  
            <li><a href="?page_id=8526">Campanhas da DMA</a></li>
            <li><a href="?page_id=8477">Cesta Ecológica e SEMA</a></li>
            <li><a href="?page_id=7747">Expedições</a></li>            
            <li><a href="?page_id=8289">Exposições Itinerantes e Interativas</a></li> 
            <li><a href="?page_id=8577">Informativo DMA</a></li>                                                 
         </ul>
        <!--<a href="?page_id=1207" class="botao2">Mais Notícias</a>!-->
        
       <!----------------------- FIM DE ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
      

    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dmacomunica.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

