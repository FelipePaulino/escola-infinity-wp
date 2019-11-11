<?php 

/*
Template Name: Curso de Piano para Crianças
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
				<div class="banner-interna banner-piano-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de piano <span>para crianças na Lapa</span></h1>
						<p>Bonitos, imponentes e admirados especialmente na música clássica, os pianos são
instrumentos musicais de teclas que há séculos encantam os ouvidos das pessoas. Aprender a
tocá-los é um desejo de muitas crianças. O lado bom é que, em qualquer idade, é
possível dominar o instrumento.
<p>
O ensino do piano para crianças, além de ser uma atividade prazerosa, estimula o
desenvolvimento da coordenação motora, do raciocínio, das emoções e da sensibilidade
musical nos pequenos.</p>
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
				<h2>Saiba mais sobre<span class="titulo-crianca"> o piano </span></h2>
				<p>Surgido no século XVIII na Itália, o piano é considerado uma evolução do cravo, um antigo
instrumento musical de teclas. Cada tecla, ao ser pressionada, aciona martelos de madeira que
produzem sons, que variam conforme a intensidade do músico. Com o passar dos anos, esses
instrumentos passaram por alterações que otimizaram seu desempenho.
<p>
Cada vez mais admirado pela intensidade ou pela delicadeza de seus sons, o piano faz parte da
música erudita, mas também marca presença na música popular ocidental, especialmente no
jazz. Versátil, expressivo e emocionante, o piano é um dos instrumentos musicais mais
conhecidos e admirados ao redor do mundo.</p>

				<h2>Aulas de Piano<span class="titulo-crianca"> para crianças </span></h2>
				<p>Na Escola Infinity, oferecemos um espaço amplo, equipado e agradável para o ensino do piano
para crianças. Nossos professores são experientes e qualificados e ensinam por meio de uma
didática eficiente. As aulas são personalizadas e desenvolvem na criança o interesse pela
música e as primeiras noções de ritmo e funcionamento do instrumento.
<p>
Sempre de forma divertida, leve, agradável e interativa, a criança tem a oportunidade de
desenvolver seus potenciais aqui na Escola Infinity.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
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
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-piano-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">

<?php get_footer(); ?>

