
<?php /** Template Name: Projeto Expedicoes*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Expedições</h2>   

<br />    

<p style="text-align:justify">O <em>projeto <strong>Expedições</strong></em> surgiu com a intenção de integrar pessoas e natureza, promovendo a sensibilização quanto às questões ambientais. Para tanto, organiza <strong>visitas guiadas para lugares e/ou projetos</strong> que promovam esta <strong>percepção pautada por princípios de vida sustentável</strong>. O projeto é voltado para alunos, professores e funcionários da UFRN

O projeto de alcance mais limitado da DMA Comunica, em termos quantitativos – cada edição comporta apenas 28 pessoas, a lotação do ônibus da UFRN (o que nos levou a fazer duas viagens por semestre), é também o que procura expandir nosso olhar para além do espaço e cotidiano intra-muros, que é o foco principal do trabalho da DMA.  Ao sair um pouco do espaço do Campus Central, chamando a atenção para o entorno da cidade e ampliando o olhar para as belezas e potencialidades de nossa região, ou mesmo para os problemas, procuramos atingir mais profundamente as pessoas. A ideia é de olhar para ver, de fato, a realidade que nos cerca, para nela poder intervir com soluções possíveis e com qualidade. 
</p>

<p style="text-align:right;"><a href="http://www.sigaa.ufrn.br/sigaa/public/extensao/consulta_extensao.jsf" target="_blank" style="color:#639334"><strong>Veja texto completo do projeto submetido à PROEX
 <br />(insira como título da ação "Expedicoes" e em tipo de atividade "projeto")</strong></a></p>

<br />
<br />

<p style="text-align:left;color:#639334"><strong>COMO PARTICIPAR</strong></p>
<br />
<p style="text-align:justify"><strong>O Expedições acontece à cada início de semestre</strong> – meados de março/agosto. A inscrição é feita na sede da Superintendência de Infraestrutura, onde se localiza a DMA, na sala da DMA Comunica. 

Mantenha-se informado sobre este projeto e outras ações da DMA cadastrando-se, na na barra lateral direita desta página, para recebimento do Informativo DMA. Através dele, você fica informado sobre as datas para inscrição, os locais para visitação, e demais detalhes sobre a participação.
</p>



        
<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
         <!----------------------- LUGARES E PROJETOS VISITADOS ------------------------------------------>
          
       <h2>LUGARES E PROJETOS VISITADOS </h2>
	   <ul class="lista">
		<?php query_posts('category_name=Lugares e Projetos visitados - Expedicoes'); for ( $retranca = 1; $retranca <=5; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
      </ul>
        <!--<a href="?page_id=7743" class="botao">Ver Mais</a>!-->
    <!----------------------- FIM DE LUGARES E PROJETOS VISITADOS ------------------------------------------>
    
     <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Expedições</h2>
        
        <?php query_posts('category_name=Album Expedicoes'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
         <div class="clear" style="margin-bottom:20px;"></div>
        
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
       
       
        <div class="clear" style="margin-bottom:10px;"></div>     
      
      <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
          
       <h2>Associação a outros projetos </h2>
	    <ul class="lista">
            <li><a href="?p=14955">Campanhas da DMA</a></li>	<!----pagina antiga: ?page_id=8526----->           
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

