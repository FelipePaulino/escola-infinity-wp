<?php 

/*
Template Name: Curso de Teclado para Crianças
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
				<div class="banner-interna banner-teclado-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de teclado <span>para crianças na Lapa</span></h1>
						<p>Representante da integração entre a música e a tecnologia, o teclado possui uma série de
recursos que enriquecem sua potência sonora. Presentes na música popular, os teclados são
bastante atraentes, inclusive para o público infantil. A exposição da criança a um instrumento
musical desde cedo permite que ela se expresse e adquira conhecimentos sobre música, de
uma forma leve e divertida.
<p>
Exercitando a concentração e conhecendo as notas e os sons, o teclado permite que a criança
mergulhe no universo musical e desenvolva habilidades.</p>
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
				<h2>Saiba mais sobre <span class="titulo-crianca"> o teclado</span></h2>
				<p>Os teclados surgiram nos anos 1960, como um desdobramento de outro importante
instrumento de teclas: o piano. Semelhante a esse instrumento, o teclado, no entanto, possui
menos teclas e som reproduzido por meio eletrônico. Os teclados possuem diversos efeitos e
incorporam sons de diferentes instrumentos musicais, auxiliando na melodia e na percussão.
<p>
Hoje em dia, esses instrumentos possuem diferentes estilos – dos mais simples aos mais
sofisticados – e são produzidos por diversas marcas. Sua variedade de recursos permite que
esses incríveis instrumentos façam parte de diversos gêneros musicais, como a música
eletrônica, o rock, o pop, o jazz, entre muitos outros.</p>

				<h2>Aulas de Teclado <span class="titulo-crianca">para crianças </span></h2>
				<p>Os professores da Escola Infinity são muito qualificados para o ensino do teclado para crianças.
Por meio de uma metodologia de ensino moderna, as aulas para o público infantil despertam
nos alunos o interesse pelos instrumentos, de uma forma lúdica e divertida. Conhecendo o
funcionamento do instrumento, a criança desenvolve a audição, a criatividade a as noções
rítmicas.
<p>
Contamos com excelente infraestrutura e material didático exclusivo para oferecer
experiências interativas e enriquecedoras para a educação infantil.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
								<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-piano-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Piano</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-piano-para-criancas" class="col-md-2" title="Ir para Curso de Piano para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

						<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-bateria-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Bateria</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-bateria-para-criancas" class="col-md-2" title="Ir para Curso de Bateria para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-baixo-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Contra-Baixo</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-contrabaixo-para-criancas" class="col-md-2" title="Ir para Curso de Contra-Baixo para Crianças"></a>
						</figcaption>			
					</figure>

			</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violino-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violino</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violino-para-criancas" class="grid col-md-2" title="Ir para Curso de Violino para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-teclado-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>
