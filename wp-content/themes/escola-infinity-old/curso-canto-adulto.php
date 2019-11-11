<?php 

/*
Template Name: Curso de Canto para Adultos
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
				<div class="banner-interna banner-canto-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h2>AULA de Canto <span>profissional</span></h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

					    <p>Sed ut perspiciatisis iste natus error sit volupt unde omnis iste natus error sit voluptatem accusantiuis iste natus error sit voluptm doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicomis iste natus error sit volupt.</p>
						<a href="#">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja2.png" class="bush-banner">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>metodologia <span>de ensino</span></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

				<h2>grade <span>curricular</span></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img_categorias.jpg">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img_categorias.jpg">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img_categorias.jpg">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img_categorias.jpg">
					</a>
				</div>

			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-canto-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">
<?php get_footer(); ?>
