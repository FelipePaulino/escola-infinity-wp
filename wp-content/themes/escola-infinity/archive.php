		
<?php get_header(); ?>

		<div class="carrosel">
			<div>
				<div class="banner-interna banner-blog laranja">
				<div class="container">
					<div class="texto-banner">
						<h2 ><span>blog</span></h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasicom architecto beatae.</p>
						
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-azul.png" class="bush-blog">
		<?php include_once ('includes/php/menu.php') ?>


		<div class="container">
		
			<div class="col-md-9 ">
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="conteudo-categoria">
				<div class="box-img-categoria">
					<?php the_post_thumbnail('imagem-categoria'); ?>
				</div>
				<h2><?php the_title(); ?></h2>
				
				<span>Postado por: <?php the_author(); ?> - <?php echo get_the_date(); ?></span>
				<p><?php the_excerpt();?></p>
		
			</div>

			 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; ?>
 </div>
<?php get_sidebar(); ?>	
		
		<?php get_footer(); ?>		