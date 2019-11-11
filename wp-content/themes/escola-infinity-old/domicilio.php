<?php 

/*
Template Name: Domicilio
*/

get_header(); 

?>
<style type="text/css">
.right {
    height: auto;
}
.banner-interna p, .banner-interna h2 {
    color: #12162d;
}

 @media (max-width: 480px) {
.conteudo a {
    margin-left: 15px;
}
}
</style>

		<div class="carrosel">
			<div>
				<div class="banner-interna banner-domicilio laranja">
				<div class="container">
					<div class="texto-banner">
						<h2>Aulas de Música <span>em domicílio</span></h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

					    <p>Sed ut perspiciatisis iste natus error sit volupt unde omnis iste natus error sit voluptatem accusantiuis iste natus error sit voluptm doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicomis iste natus error sit volupt.</p>
						<a href="#">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-rosa.png" class="bush-rosa">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>metodologia <span class="titulo-vermelho">de ensino</span></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

				<h2>grade <span class="titulo-vermelho">curricular</span></h2>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia motak voluptas sit aspeo inventore veritatis ernatur aut odit aut.o inventore veritatis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>


			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
			
			</div>
		</div>
		<div class="container conteudo">
			<h2 style="font-size: 30px;">veja outros <span class="titulo-vermelho">cursos instrumentais</span></h2>
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
			<p class="deslize"><< Deslize para ver mais  >></p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">
<?php 


get_footer(); 

?>

