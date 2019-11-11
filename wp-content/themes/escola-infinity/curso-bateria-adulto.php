<?php 

/*
Template Name: Curso de Bateria para Adultos
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
				<div class="banner-interna banner-bateria-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de bateria <span>para Adultos na Lapa</span></h1>
						<p>Na atualidade, é raro pensar em uma banda sem um baterista. A bateria é um instrumento de
percussão, composto por pratos e tambores em diferentes alturas. Expressivas e intensas, as
baterias são importantes elementos para o ritmo e a cadência das performances. Muitos
bateristas colocaram seu nome na história da música.
<p>
Fazendo parte de diferentes gêneros musicais, as baterias possibilitam amplos repertórios e
têm atraído cada vez mais pessoas dispostas a aprender a tocar o instrumento.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="images/bush-laranja2.png" class="bush-banner">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>Saiba mais sobre<span> a bateria </span></h2>
				<p>Tambores são, provavelmente, os mais antigos instrumentos musicais, fazendo parte de festas
e celebrações desde a pré-história. No século XX, tambores e pratos eram comuns nas
orquestras e bandas militares, mas cada instrumentista era responsável por apenas um item. O
desenvolvimento do pedal trouxe a possibilidade de agrupar diferentes tambores e pratos
num único instrumento, que, assim, poderia ser tocado por uma única pessoa. No entanto, é
preciso coordenação motora e conhecimento de padrões rítmicos para tocar bateria.
<p>
Esse conceito de vários instrumentos em um atribuiu muita importância às baterias. Por isso,
esses instrumentos dão vida a diferentes estilos musicais, como jazz, hip-hop, pop, rock, blues,
funk, samba, entre outros.</p>

				<h2>Aulas de bateria <span>para adultos</span></h2>
				<p>Para desenvolver as habilidades requeridas para tocar bateria com perfeição, a Escola Infinity
conta com professores qualificados e experientes, que se utilizam de métodos modernos para
ensinar. Com músicas de sua preferência, aqui você desenvolve talentos e competências,
adquirindo conhecimento sobre o controle das baquetas, postura das mãos e braços,
componentes das baterias, ritmos básicos, leitura de partituras e habilidade de tocar em
conjunto.
<p>
Para realizar o sonho de se tornar um baterista de sucesso, a Escola Infinity tem estrutura e
experiência.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-baixo-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Contra-Baixo</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-contrabaixo-para-adultos" class="col-md-2" title="Ir para Curso de Contra-Baixo para Adultos"></a>
						</figcaption>			
					</figure>

			</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violino-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violino</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violino-para-adultos" class="grid col-md-2" title="Ir para Curso de Violino para Adultos"></a>
						</figcaption>			
					</figure>
				</div>


					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-musicalizacao-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2 style="font-size: 23px; margin-left: -28px;">Aula de <span>Musicalização Infantil</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>musicalizacao-infantil" class="grid col-md-2" title="Ir para Curso de Musicalização para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
										<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violao-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violão</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-adultos" class="col-md-2" title="Ir para Curso de Violão para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
				</div>

			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-bateria-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">



<?php get_footer(); ?>