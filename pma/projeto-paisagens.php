<?php /** Template Name: Projeto Paisagens do Campus*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>PAISAGENS DO CAMPUS: Fauna, Flora, Pessoas, Lugares... 
(Você Conhece o Lugar onde Estuda ou Trabalha?)
</h2>   

<br />    

<p style="text-align:justify">A UFRN é uma verdadeira cidade, contando com uma população de cerca de 30 mil pessoas circulando por dia em uma área de 123 ha. Nenhum lugar é mais adequado para abrigar reflexões sobre as questões ambientais do que o próprio ambiente a que pertencemos.

<br />
<br />

O projeto <em><strong>Paisagens do Campus</strong> - Flora, Fauna, Pessoas, Lugares</em>, vem para aproximar a comunidade universitária do lugar onde estuda e trabalha através de várias ações coordenadas de forma integrada e interativa, envolvendo ensino, pesquisa e extensão. Resultado dessas ações, a <strong>criação e produção contínua de um acervo de textos e imagens</strong> voltados para o Campus viabilizam o conhecimento do lugar onde se estuda e trabalha. Esses estudos são a base para a construção do <strong>plano de pauta anual</strong>, com os temas para as <strong>matérias e postagens no PMA UFRN</strong>, para as <strong>mensagens educativas enviadas pelo Informativo DMA</strong>, pelas <strong>campanhas</strong> desenvolvidas na busca de soluções para os problemas ambientais que presenciamos no Campus, e que tem por carro-chefe as <strong>Exposições Itinerantes e Interativas</strong>. São elas também que direcionam o tema na nossa participação nos eventos que são produzidos pela DMA – <strong>CESTA Ecológica</strong>, ou dos quais participamos – <em>Semana de Meio ambiente e CIENTEC</em>.

<br />
<br />

<em>Conhecer para amar, amar para preservar</em>. Esta postura nos possibilita agir localmente, conhecendo o todo e pensando de forma global. Para os alunos vinculados
ao projeto, o enriquecimento tem múltiplas faces, através das vivências das diversas ações e iniciativas. Os cursos e professores terão amplo acervo em diversas mídias para consulta e desenvolvimento de estudos e pesquisas sobre a fauna, flora, pessoas e lugares do Campus, e da UFRN.

<br />
<br />

AS CAMPANHAS da DMA Comunica resultam dos levantamentos, compilações, estudos, entrevistas e pesquisas realizadas que são o objeto do projeto.</p>

<p style="text-align:right;"><a href="http://www.sigaa.ufrn.br/sigaa/public/extensao/consulta_extensao.jsf" target="_blank" style="color:#639334"><strong>Veja texto completo do projeto submetido à PROEX
 <br />(insira como título da ação "Paisagens do Campus" e em tipo de atividade "projeto")</strong></a></p>

<br />
<br />

<p style="text-align:left;color:#639334"><strong>COMO PARTICIPAR</strong></p>
<br />
<p style="text-align:justify">Voluntariado com interesse em pesquisar sobre temas no interior do universo  do Campus, em publicar e/ou criar produtos de comunicação a partir do resultado de seus estudos.</p>



        
<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>DOCUMENTAÇÃO FOTOGRÁFICA DA Fauna, Flora, Pessoas e Lugares</h2>
        
        <?php query_posts('category_name=Album Paisagens do Campus'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
   <!----------------------- DOCUMENTOS E PROJETOS ------------------------------------------>
          
       <h2>DOCUMENTOS E PROJETOS SOBRE O CAMPUS E A UFRN </h2>
	   <ul class="lista">
		<?php query_posts('category_name=Documentos e Projetos - Paisagens'); for ( $retranca = 1; $retranca <=4; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
      </ul>
        <a href="?page_id=7743" class="botao">Ver todos</a>
    <!----------------------- FIM DE DOCUMENTOS E PROJETOS ------------------------------------------>
	   
	   <div class="clear" style="margin-bottom:10px;"></div>       
       
       <!----------------------- MARKETING INSTITUCIONAL ------------------------------------------>
          
       <h2>Divulgação Institucional </h2>
	   <ul class="lista">
		<?php query_posts('category_name=Marketing Institucional - Paisagens'); for ( $retranca = 1; $retranca <=1; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
      </ul>
        <!--<a href="?page_id=1207" class="botao2">Mais Notícias</a>!-->
       <!----------------------- FIM DE MARKETING INSTITUCIONAL ------------------------------------------>
       
        <div class="clear" style="margin-bottom:10px;"></div>     
       
        <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
          
       <h2>Associação a outros projetos </h2>
	   <ul class="lista">
        	<li><a href="?page_id=8526">Campanhas da DMA</a></li>
            <li><a href="?page_id=8477">Cesta Ecológica e SEMA</a></li>            
            <li><a href="?page_id=8289">Exposições Itinerantes e Interativas</a></li>                        
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

