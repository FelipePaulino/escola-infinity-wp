<?php 

/*
Template Name: Curso de Saxofone para Adultos
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
				<div class="banner-interna banner-saxofone-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h2>Curso de saxofone <span>para adultos na Lapa</span></h2>
						<p>Também conhecido simplesmente como sax, o saxofone é um instrumento de sopro. Surgido
na Europa, não se trata de um instrumento tão antigo, mas que já marca presença em
diferentes gêneros musicais, tanto na música erudita quanto na música popular.
<p>
O charme do instrumento e a beleza única de sua sonoridade fazem do saxofone um
instrumento versátil e com timbre rico, muito apreciado. O domínio das técnicas desse clássico
instrumento pode ser aprendido aqui na Escola Infinity.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja2.png" class="bush-banner">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>Saiba mais sobre<span> o saxofone </span></h2>
				<p>Ao contrário da maior parte dos atuais instrumentos musicais, que consistem em evoluções e
adaptações de instrumentos mais antigos, o saxofone foi deliberadamente inventado. É fato
que o belga Adolph Sax, inventor do instrumento, baseou sua criação em seus estudos de
flautas e clarinetes, mas o objeto chamou atenção por seu estilo e som inovadores. Foi exibido
pela primeira vez em 1844, em Paris.
<p>
Na música erudita, o saxofone faz parte das orquestras de sopros. Na música popular, o
instrumento aparece no choro, no pop, no samba e no jazz. A família dos saxofones é
composta por diferentes tipos: alto, tenor, soprano e barítono.</p>

				<h2>Aulas de saxofone <span>para adultos</span></h2>
				<p>Tocar saxofone é sinônimo de elegância e sofisticação, o que tem atraído cada vez mais
pessoas. Para dominar as técnicas que o instrumento exige, a Escola Infinity oferece todo o
conhecimento teórico e prático, por meio de uma didática eficiente e de materiais exclusivos.
Dessa forma, você aprende sobre sonoridade, afinação, técnica, leitura e improvisação para
tocar o instrumento com perfeição.
<p>
Realize seu sonho e venha para a Escola Infinity. Dispomos de ótima infraestrutura para que
você transforme seu potencial em talento.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


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

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-guitarra-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Guitarra</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-guitarra-para-adultos" class="col-md-2" title="Ir para Curso de Guitarra para Adultos"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-canto-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Canto</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-canto-para-adultos" class="col-md-2" title="Ir para Curso de Canto para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-teclado-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Teclado</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-teclado-para-adultos" class="grid col-md-2" title="Ir para Curso de Teclado para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
				</div>

			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-saxofone-adulto.jpg" class="imagem-auxiliar">
				
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>

