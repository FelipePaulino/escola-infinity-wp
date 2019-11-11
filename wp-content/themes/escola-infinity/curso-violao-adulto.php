<?php 

/*
Template Name: Curso de Violão para Adultos
*/

get_header(); 

?>	
		<div class="carrosel">
			<div>
				<div class="banner-interna banner-violao-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de violão <span>para adultos na Lapa</span></h1>
						<p>Instrumento composto por seis cordas, o violão foi concebido a princípio para a música
erudita. No entanto, o instrumento se popularizou e caiu no gosto das pessoas. A praticidade,
o baixo custo e a riqueza harmônica fizeram do violão uma presença garantida nas principais
rodinhas de amigos em festas, praias, bares e passeios, sempre acompanhado pelo canto.
<p>
Por estar tão enraizado na cultura brasileira, muitas pessoas procuram escolas de música para
aprender as técnicas para tocar violão corretamente.</p>
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
				<h2>Saiba mais sobre<span> o violão </span></h2>
				<p>Um mecanismo bastante simples: cordas aplicadas sobre uma caixa, geralmente de madeira,
produzindo uma acústica admirável. Acredita-se que esse instrumento tenha surgido
aproximadamente 2000 anos antes de Cristo, possivelmente como uma derivação da cítara
romana ou do alaúde árabe – dois antigos instrumentos musicais.
<p>
Além da música erudita, o violão faz parte de alguns ritmos latinos, da MPB, da bossa nova, da
música clássica, do choro, do fado português, da música sertaneja, entre outros gêneros.
Popular e romântico, bastam palhetas ou os próprios dedos para dar vida a este simples
instrumento. Também são conhecidos como “guitarra clássica”, embora a denominação violão
seja a mais comum no Brasil.</p>

				<h2>Aulas de Violão <span>para adultos</span></h2>
				<p>Na Escola Infinity, contamos com profissionais experientes e com toda a infraestrutura
necessária para aprender a tocar violão. Aqui, você encontra material didático exclusivo e
aprende desde as melodias mais simples até as mais complexas. A postura correta para
manusear o instrumento, a palhetada, o dedilhado, a digitação e os acordes são os itens
contemplados em nosso curso. Na Escola Infinity, você aprende facilmente, por meio de
métodos eficazes que ensinam a produzir música com harmonia.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


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

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-piano-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Piano</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-piano-para-adultos" class="col-md-2" title="Ir para Curso de Piano para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
				</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-violao-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>