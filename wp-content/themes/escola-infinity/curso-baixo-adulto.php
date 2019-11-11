<?php 

/*
Template Name: Curso de Baixo para Adultos
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
				<div class="banner-interna banner-baixo-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de Contrabaixo <span>para adultos na Lapa</span></h1>
						<p>O baixo elétrico, também conhecido como contrabaixo ou simplesmente baixo, é um
instrumento de cordas. Semelhantes às guitarras, mas com corpo maior, os baixos produzem
um som mais grave, que funciona como um poderoso alicerce musical. Hoje em dia, os baixos
fazem parte das composições de muitos gêneros da música popular.
<p>
Apesar do estilo mais sóbrio, esses instrumentos também permitem que sejam executados
efeitos musicais potentes. Por isso, muitas pessoas têm procurado aprender a tocá-los com
maestria.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="images/bush-laranja2.png" class="bush-banner">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 col-xs-12 conteudo">
				<h2>Saiba mais sobre <span>o contrabaixo </span></h2>
				<p>Os baixos têm sua origem na Idade Média, como uma derivação das violas, durante o século
XV. Inicialmente de madeira e com apenas três cordas, os baixos tiveram a quarta corda
incluída a partir do século XIX. Na década de 1950, Leo Fender criou o baixo elétrico, tal como
o conhecemos hoje - uma opção mais leve e prática, por meio de uma pastilha
eletromagnética para captar o som.
<p>
Essas modificações levaram à popularização do baixo, tornando-se peça essencial no
desenvolvimento de muitos estilos musicais modernos, como rock, blues, jazz, funk, reggae,
country e ritmos típicos da cultura brasileira.</p>

				<h2>Aulas de contrabaixo<span>para adultos</span></h2>
				<p>Para quem deseja se tornar um baixista de sucesso, a Escola Infinity ajuda a realizar esse
sonho. Contamos com professores experientes, que oferecem um curso completo que
contempla teoria e prática, em uma didática moderna. Aqui, você aprende melodias de uma
corda, dedilhado, digitação, acordes e músicas cifradas.
<p>
Com excelente estrutura e material didático exclusivo, a Escola Infinity oferece aulas
personalizadas, para que você aprenda a tocar baixo e, ao mesmo tempo, se divirta.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


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
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-saxofone-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Saxofone</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-saxofone-para-adultos" class="col-md-2" title="Ir para Curso de Saxofone para Adultos"></a>
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
				</div>

			</div>
			<div class="col-md-6 right col-xs-12">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-baixo-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">

<?php get_footer(); ?>