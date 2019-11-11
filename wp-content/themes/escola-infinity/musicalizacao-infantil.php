<?php 

/*
Template Name: Curso de Muzicalização com Instrumentos para Crianças
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
				<div class="banner-interna banner-musicalizacao-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de Musicalizacao Infantil <span>na Lapa</span></h1>
						<p>Muitas crianças, desde cedo, manifestam o interesse pela música. É fato constatado que a
musicalização durante a infância oferece uma série de benefícios que acompanharão a criança
por toda a vida, como o raciocínio lógico, a concentração, a dedicação, habilidades de
linguagem, criatividade, memória, entre outros.
<p>
No entanto, nem sempre fica claro qual é o instrumento musical mais adequado, já que são
muitas as possibilidades. Por conta disso, oferecemos a musicalização com instrumentos para
crianças.</p>
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
				<h2>Objetivos da <span class="titulo-crianca">musicalização com instrumentos </span></h2>
				<p>Para inserir a criança no universo musical e torná-la mais receptiva aos sons e aos ritmos,
instrumentos mais simples e adaptados, brinquedos rítmicos e até mesmo instrumentos com
sucata são úteis para ampliar seus conhecimentos.
<p>
Por meio das brincadeiras, dos jogos cantados, das palmas e da identificação dos sons da
natureza e de objetos diversos, as crianças desenvolvem sua audição, noções de ritmo,
expressão corporal e o gosto pela música. Assim, fica mais fácil diferenciar os sons,
compreender noções de grave e agudo, reproduzir sons vocais e não vocais, ouvir e cantar
canções populares e movimentar-se ao som de músicas com ritmos variados.</p>

				<h2>Aulas de  <span class="titulo-crianca">Musicalizacao Infantil</span></h2>
				<p>Com o objetivo de ampliar os conhecimentos musicais da criança, as aulas de musicalização
com instrumentos na Escola Infinity exploram o lado lúdico, de modo que o público infantil
desenvolva suas habilidades por meio de jogos e brincadeiras. Nossos professores são
experientes e capacitados para o ensino infantil, com uma didática moderna.
<p>
Em um ambiente agradável, com salas climatizadas e equipadas com todos os instrumentos
necessários, oferecemos espaços ideais para uma aprendizagem suave e prazerosa.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violao-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violão</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-criancas" class="col-md-2" title="Ir para Curso de Violão para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-guitarra-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Guitarra</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-guitarra-para-criancas" class="col-md-2" title="Ir para Curso de Guitarra para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-canto-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Canto</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-canto-para-criancas" class="col-md-2" title="Ir para Curso de Canto para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-teclado-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Teclado</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-teclado-para-criancas" class="grid col-md-2" title="Ir para Curso de Teclado para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-musicalizacao-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">




<?php get_footer(); ?>
