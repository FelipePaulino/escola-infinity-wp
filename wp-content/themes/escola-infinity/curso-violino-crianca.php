<?php 

/*
Template Name: Curso de Violino para Crianças
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
				<div class="banner-interna banner-violino-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de violino <span>para crianças na Lapa</span></h1>
						<p>O violino é um dos mais antigos e nobres instrumentos musicais, sendo apreciado por
diferentes gerações com o passar do tempo. Fazendo parte da história da música erudita, mas
também com participações importantes na música popular, esse instrumento requer
concentração e domínio das técnicas exatas.
<p>
O ensino do violino pode ser realizado desde a infância, fase da descoberta de talentos e
potenciais. Aqui na Escola Infinity, realizamos o sonho de quem quer aprender a produzir
música de qualidade.</p>
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
				<h2>Saiba mais sobre o <span class="titulo-crianca">violino</span></h2>
				<p>Acredita-se que o violino tenha surgido a partir de diversos instrumentos musicais do passado.
O instrumento foi possivelmente concebido entre o final do século XVI e início do século XVII.
Sua produção teve início com três famílias italianas, Amati, Guarneri e Stradivarius, antes de
sua popularização.
<p>
O violino é um instrumento com quatro cordas que produzem som ao serem friccionadas por
um arco. Ele é muito associado à música clássica, por conta de sua presença comum nas
orquestras. No entanto, esse instrumento também se faz presente na música folclórica, no
rock e em outros gêneros musicais mais populares. O seu timbre agudo e estridente produz
um som único e admirável.</p>

				<h2>Violino para crianças <span class="titulo-crianca">é na Infinity</span></h2>
				<p>Para quem deseja aprender a tocar violino em aulas leves, lúdicas, com uma moderna
metodologia de ensino, a Escola Infinity é o local. Contamos com uma equipe qualificada e
experiente de professores para o ensino de música para crianças. Além disso, dispomos de
toda a infraestrutura necessária para oferecer um curso completo, com material didático
exclusivo.
<p>
Aprender música na Infinity é uma experiência divertida e agradável, que permite que sejam
aprendidas as técnicas para tocar o instrumento com maestria.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
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
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-violino-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>

