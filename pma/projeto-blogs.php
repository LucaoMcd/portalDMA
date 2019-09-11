<?php /** Template Name: Projeto Blogs*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Blogs</h2>   

<br />    

<p style="text-align:justify">Além do portal em si, a idéia do PMA previu, desde seu início, a instalação de blogs. Os blogs temáticos promovem o debate de importantes questões ambientais, junto à comunidade universitária, cumprindo com o objetivo de utilizar o Portal de Meio Ambiente com fins educativos. Atualmente os blogs gerenciados pela equipe da DMA Comunica é o Blog da DMA, canal web de divulgação com um formato mais leve e espontâneo, e o Blog de Olho na Cidade da Copa, idealizado para divulgar e discutir as informações e transformações relacionadas à Copa 2014.<p> 
<br />  
<br />  

<p style="text-align:left;color:#639334"><strong>Blog De Olho na Cidade da Copa</strong></p>

<br />

<p style="text-align:justify">Buscando influenciar nos destinos da Copa do Mundo 2014, o Comitê Popular da Copa, em Natal, lançado em 15 de abril de 2011, irá monitorar as ações públicas e privadas relacionadas ao evento, em todo o processo de planejamento e realização das ações, acompanhando o cumprimento e a efetivação dos Direitos Humanos e dos princípios democráticos assegurados na Constituição Federal Brasileira. A ideia é garantir o respeito aos direitos econômicos, sociais, culturais e ambientais dos cidadãos natalenses, possibilitando um legado positivo para a cidade.
<br />
<br />
Para dar visibilidade, aproximar o cidadão deste grandioso evento e permitir que ele mesmo possa ser um fiscal, acompanhando e cobrando ações das instâncias responsáveis, foi disponibilizado um espaço para a criação do blog De Olho na Cidade da Copa, no Portal de Meio Ambiente da UFRN.</p>
<br />
<br />
<a href="http://www.meioambiente.ufrn.br/deolhonacidadedacopa/" target="_blank" class="botao">Ver Blog</a>

<br />
<br />
<!--
<p style="text-align:left;color:#639334"><strong>Blog da DMA</strong></p>
<a href="http://www.meioambiente.ufrn.br/blogdadma/" target="_blank" class="botao">Ver Blog</a>
-->
<br />
<br />



<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
    <div class="clear" style="margin-bottom:10px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Blogs</h2>
        
        <?php query_posts('category_name=Album Blogs'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
    <div class="clear" style="margin-bottom:40px;"></div>
       
       
      
      <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
       <br />  
       <h2>Associação a outros projetos </h2>
	   <ul class="lista">
            <li><a href="?page_id=8526">Campanhas da DMA</a></li>
            <li><a href="?page_id=8477">Cesta Ecológica e SEMA</a></li>
            <li><a href="?page_id=7747">Expedições</a></li>            
            <li><a href="?page_id=8289">Exposições Itinerantes e Interativas</a></li> 
            <li><a href="?page_id=8577">Informativo DMA</a></li> 
            <li><a href="?page_id=8419">Portal de Meio Ambiente</a></li>                                                  
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

