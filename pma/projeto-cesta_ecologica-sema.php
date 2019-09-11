<?php /** Template Name: Projeto Cesta Ecologica e SEMA*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Cesta Ecológica e Semana de Meio Ambiente (SEMA)
</h2>   

<br />    

<p style="text-align:justify">Projeto de multi-eventos ambientais concentrados em um dia para pensar a questão ambiental de diferentes formas,  a CESTA Ecológica do Campus  foi criada, em 2009, com a proposta de promover atividades para a divulgação das ações e programas da Diretoria de Meio Ambiente, e da UFRN, em geral, bem como práticas que visem à sensibilização quanto às questões ambientais, contribuindo para mobilizar a comunidade universitária no sentido de adesão à idéia de uma sociedade sustentável.  
<br /> 
<br /> 
A CESTA Ecológica acontece no Centro de Convivência, uma vez à cada semestre. Na primeira edição, acontece vinculada à Semana de Meio Ambiente da UFRN, em junho. A segunda versão volta-se para o encerramento das atividades letivas, no Campus, em novembro. 
<br /> 
<br /> 
Com um roteiro dinâmico de atividades, o projeto CESTA Ecológica tem crescido a cada ano, em função das parcerias e possibilidades de recursos. O primeiro ano foi voltado para a exposição fotográfica e de utensílios confeccionados a partir de material reciclável e intervenções diversas de caráter de enquete ou performático. No segundo ano, apesar do espaço não ser considerado ideal, incorporamos, a pedidos, a realização de oficinas. Exibição de filmes, ou realização de palestras também sempre acompanharam a atividade. No ano passado, realizamos uma atividade de divulgação científica, com uma palestra realizada por aluna do programa de pós-graduação em desenvolvimento sustentável, da UFRN. 
Este ano, a CESTA Ecológica vai inovar por outro aspecto, inserindo, entre seus parceiros, os usuários do próprio Centro de Convivência.
<br /> 
<br /> 
Antes da CESTA Ecológica, a Semana de Meio Ambiente da UFRN se inicia com a abertura da Exposição  Fotográfica Itinerante e Interativa que este ano, dedica-se à campanha visando a implantação da coleta seletiva no Campus. Também abre a Sema da UFRN 2011 no Centro de Convivência, a Feira de Plantas Orgânicas. 
</p>

<p style="text-align:right;"><a href="http://www.sigaa.ufrn.br/sigaa/public/extensao/consulta_extensao.jsf" target="_blank" style="color:#639334"><strong>Veja texto completo do projeto submetido à PROEX
 <br />(insira como título da ação "SEXTA ECOLÓGICA - multieventos ambientais" e em tipo de atividade "projeto")</strong></a></p>

<br />
<br />

<p style="text-align:left;color:#639334"><strong>COMO PARTICIPAR</strong></p>
<br />
<p style="text-align:justify">Interessados em expor ou ministrar oficinas devem entrar em contato com a DMA Comunica através do e-mail <strong>dmacomunica@infra.ufrn.br</strong> ou pelos telefones 3215-3161 / 3162.</p>



        
<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Cesta Ecológica</h2>
        
        <?php query_posts('category_name=Album Cesta Ecologica'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
   <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Semana de Meio Ambiente (SEMA)</h2>
        
        <?php query_posts('category_name=Album Sema'); while (have_posts()) : the_post(); ?>        
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
            <li><a href="?page_id=8289">Exposições Itinerantes e Interativas</a></li> 
            <li><a href="?page_id=8577">Informativo DMA</a></li> 
            <li><a href="?page_id=8419">Portal de Meio Ambiente</a></li>                                                  
         </ul>
        <!--<a href="?page_id=1207" class="botao2">Mais Notícias</a>!-->
        
       <!----------------------- FIM DE ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
                  
   
        
         <div class="clear" style="margin-bottom:10px;"></div>
       
    
    </div><!-- lado-direito -->
    
    <div id="lado-direito">
    	<?php include "sidebar-dmacomunica.php"; ?>
    </div><!-- lado-direito -->
    
    <div class="clear"></div>
	
</div><!-- content -->



<?php get_footer(); ?>

