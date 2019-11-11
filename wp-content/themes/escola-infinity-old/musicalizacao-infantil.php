<?php 

/*
Template Name: Muzicalização Infantil
*/

get_header(); 

?>
<style type="text/css">
#map {
	height: 767px;
	width: 100%;
	margin-top: 0;
}
.form-home{
	top:0;
}
.musicalizacao{
	border-bottom: 2px solid #f64a00;
}
.banner-interna p, .banner-interna h2 {
    color: #12162d;
}

 @media (max-width: 480px) {
.conteudo h2 span{
	font-size: 40px;
}
#map, .form-home {
    margin-top: 46px;
	}
.musicalizacao{
	border:0;
}

}
</style>
	<title>Escola Infinity</title>
</head>
<body>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="grande"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg" class="felipe"></div>
		<div class="carrosel">
			<div>
				<div class="banner-interna banner-musicalizacao laranja">
				<div class="container">
					<div class="texto-banner">
						<h2>musicalização <span>infantil</span></h2>
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
				<h2 style="letter-spacing: 0;">conheça o espaço físico <span>
		da escola INFINITY</span></h2>
			<div class="galeria">
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
				<li><a href="#" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/images/foto1.jpg"></a></li>
			</div>
			<p class="deslize"><< Deslize para ver mais  >></p>
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-musicalizacao-infantil.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php 


get_footer(); 

?>

