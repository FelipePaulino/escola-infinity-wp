<?php 

/*
Template Name: Curso de Bateria para Crianças
*/

get_header(); 

?>	
<style type="text/css">
.cursos{
	border-bottom: 2px solid #f64a00;
}

</style>

		<div class="carrosel">
			<div>
				<div class="banner-interna banner-bateria-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h2>Curso de bateria <span>para crianças na Lapa</span></h2>
						<p>Com tambores e pratos que produzem sons intensos e diversificados, as baterias estão entre
os instrumentos musicais que mais encantam o público infantil. Aprender a tocar esse
instrumento requer coordenação motora, raciocínio lógico e concentração – competências que
precisam ser desenvolvidas ainda na infância.
<p>
As baterias são instrumentos muito populares em diversos ritmos musicais da atualidade. Por
isso, oferecem à criança uma possibilidade não só de desenvolver suas habilidades, como
também de se expressar, canalizar sua energia e se divertir.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-azul.png" class="bush-banner">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>Saiba mais sobre a <span class="titulo-crianca">bateria</span></h2>
				<p>As baterias são instrumentos complexos, compostos por um conjunto de tambores e pratos
que emitem diferentes sons, sendo percutidos com pares de baquetas. Acredita-se que os
tambores sejam os mais antigos instrumentos musicais da humanidade; um dos primeiros
modos que o homem pré-histórico encontrou para emitir sons.
<p>
No início do século XX, a invenção do pedal e dos suportes para caixas e tambores permitiu
que todos esses itens pudessem ser acoplados num único instrumento. Na atualidade, as
baterias são importantes para vários estilos musicais, como hip-hop, rock e pop. Versáteis e
intensas, as baterias são instrumentos que exigem concentração e dedicação.</p>

				<h2>Aulas de Bateria<span class="titulo-crianca"> para crianças </span></h2>
				<p>A Escola Infinity oferece aulas de bateria para crianças, estimulando a musicalização e o
aprendizado de instrumentos desde cedo. De um modo leve e divertido, com atualizadas
metodologias de ensino, contamos com professores experientes e qualificados. Com
instrumentos de qualidade e uma estrutura física completa, oferecemos o espaço ideal para
que cada criança se divirta e aprenda a dominar o instrumento em aulas personalizadas.
<p>
Com material exclusivo, estamos prontos para transformar sonhos musicais em realidade.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
								<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-baixo-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Contra-Baixo</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-contrabaixo-para-criancas" class="col-md-2" title="Ir para Curso de Contra-Baixo para criancas"></a>
						</figcaption>			
					</figure>

			</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violino-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violino</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violino-para-criancas" class="grid col-md-2" title="Ir para Curso de Violino para criancas"></a>
						</figcaption>			
					</figure>
				</div>

					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-musicalizacao-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2 style="font-size: 23px; margin-left: -28px;" class="cat-musicalizacao">Aula de <span>Musicalização Infantil</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>musicalizacao-infantil" class="grid col-md-2" title="Ir para Curso de Musicalização para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
										<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violao-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violão</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-criancas" class="col-md-2" title="Ir para Curso de Violão para criancas"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-bateria-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">



<?php get_footer(); ?>

