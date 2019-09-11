<?php /** Template Name: Projeto Exposicoes*/ include "header-dmacomunica.php"; ?>


<div class="clear"></div>

<div id="content">

	<div id="lado-esquerdo">  
                
        <!----------------------- SOBRE O PROJETO -------------------------------------------------------------->
        <h2>Exposições Itinerantes e Interativas</h2>   

<br />    

<p style="text-align:justify"><strong>Porque nosso olhar fica tão cego para as coisas que nos rodeiam?</strong> Por que nos acostumamos a não ver, sermos indiferentes com as coisas que acontecem à nossa volta? Enquanto o mundo acelerado nos mantém distanciados de nós mesmos, de nossas necessidades, o ambiente à nossa volta se transforma, muitas vezes sem que cheguemos a perceber. Com a série de exposições fotográficas itinerantes e interativas, alunos, professores e servidores técnico-administrativos da UFRN passam a ter conhecimento dos problemas e potencialidades do espaço do Campus Central.

<br />
<br />

Construídas a partir dos estudos e levantamentos realizadas pelo projeto <em>Paisagens do Campus</em>, que pesquisa a fauna, flora, pessoas e lugares da UFRN, no sentido de aliar o conhecimento local ao conceito de sustentabilidade trabalhado na missão da Diretoria de Meio Ambiente da UFRN, as <em>Exposições Itinerantes e Interativas</em> resultam das atividades desenvolvidas pelos principais programas e ações da DMA. <strong>Itinerante</strong>, visita os diversos centros acadêmicos e locais de maior circulação da UFRN. <strong>Interativa</strong>, convida o espectador a refletir sobre o espaço em que estuda ou trabalha, primeiro passo da sensibilização, rumo à produção de um espaço ecologicamente equilibrado.</p>

<br />
<br />

<p style="text-align:right;"><a href="http://www.sigaa.ufrn.br/sigaa/public/extensao/consulta_extensao.jsf" target="_blank" style="color:#639334"><strong>Veja texto completo do projeto submetido à PROEX
 <br />(insira como título da ação "Exposições Itinerantes e Interativas" e em tipo de atividade "projeto")</strong></a></p>

<br />
<br />

<p style="text-align:left;color:#639334"><strong>ITINERÁRIO</strong></p>
<br />
<p style="text-align:justify">Lançadas durante a Semana de Meio Ambiente da UFRN, as exposições <strong>iniciam a circular</strong> em junho, abrindo a Semana de Meio Ambiente da UFRN, recebendo os participantes da CESTA Ecológica, no Centro de Convivência. Após a SeMA, a exposição segue para a Biblioteca Central Zila Mamede e para o Restaurante Universitário. No <strong>segundo semestre</strong> as exibições são reiniciadas com o retorno às aulas, percorrendo os diversos setores de aula do Campus.
</p>

<br />
<br />

<p style="text-align:left;color:#639334"><strong>INTERATIVIDADE (como participar)</strong></p>
<br />
<p style="text-align:justify"><strong>Informações e sugestões de temas</strong> podem ser encaminhadas para a DMA Comunica, através do nosso email – <strong>dmacomunica@infra.ufrn.br</strong>. Agendamentos para exibições em outros locais e fora da UFRN também podem ser viabilizados, desde que não interfira na programação prevista.

<br />
<br />

A <strong>interatividade</strong> das Expo's I. I. fica a cargo das relações e processos criativos desenvolvidos pelas equipes envolvidas, podendo ser presencial, através do diálogo empreendido no momento das exibições,  ou através dos diversos recursos eletrônicos desenvolvidos pela DMA Comunica – blogs e mídias sociais da DMA. 

</p>
        
<!----------------------- FIM SOBRE DMACOMUNICA ---------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:20px;"></div>
        
         <!----------------------- TEMAS DESENVOLVIDOS ------------------------------------------>
          
       <h2>TEMAS DESENVOLVIDOS</h2>
       <p style="text-align:justify">Com este objetivo de aproximação da temática ambiental, e , prioritariamente, do local onde habita a comunidade universitária,  foram construídos os seguintes projetos de exposições pela DMA Comunica.</p>
       <br />
	   <ul class="lista">
		<?php query_posts('category_name=Temas Desenvolvidos - Exposicoes'); for ( $retranca = 1; $retranca <=5; $retranca++ ) : the_post(); ?>            
                		<li><a href="<?php the_permalink() ?>"><span style="font-size:14px; color:#56802D;"><?php the_title(); ?></span> - <?php echo excerpt(28); ?></a></li>            
        			<?php endfor;?>
      </ul>
        <!--<a href="?page_id=7743" class="botao">Ver Mais</a>!-->
    <!----------------------- FIM DE LUGARES E PROJETOS VISITADOS ------------------------------------------>
    
     <div class="clear" style="margin-bottom:20px;"></div>
     
     <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Campanhas - Expo I. I.</h2>
        
        <?php query_posts('category_name=Album Paineis Expo'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
         
       
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
        
        <div class="clear" style="margin-bottom:60px;"></div>
        
        <!----------------------- GALERIA DE IMAGENS ------------------------------------------------------------------->
        <h2>Galeria de Imagens - Expo I. I.</h2>
        
        <?php query_posts('category_name=Album Exposicoes'); while (have_posts()) : the_post(); ?>        
        <div class="galeria-imagens">              	
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?><h5><?php the_title(); ?></h5></a>
        </div>       
        <?php endwhile;?>
        
        <!----------------------- FIM DE GALERIA DE IMAGENS ------------------------------------------------------------------->
       
       
        <div class="clear" style="margin-bottom:40px;"></div>     
      
      <!----------------------- ASSOCIACAO A OUTROS PROJETOS ------------------------------------------>
          
       <h2>Associação a outros projetos </h2>
	    <ul class="lista">
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

