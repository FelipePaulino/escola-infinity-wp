<?php 

/*
Template Name: Curso de Guitarra para Adultos
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
				<div class="banner-interna banner-guitarra-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de Guitarra <span>para adultos na Lapa</span></h1>
						<p>A guitarra é um instrumento relativamente novo, mas bastante expressivo no cenário musical
nas últimas décadas. Por sua sonoridade única, a guitarra é um dos instrumentos que mais
atraem a atenção e a preferência das pessoas. Especialmente com a popularização do rock, um
bom guitarrista pode levar uma plateia à loucura.
<p>
A vibração das cordas, amplificada pela eletricidade, produz efeitos sonoros incríveis,
despertando o interesse de muitas pessoas em aprender a tocar o instrumento.</p>
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
				<h2>Saiba mais sobre<span> a guitarra </span></h2>
				<p>As guitarras surgiram na década de 1930, como uma evolução dos tradicionais violões. Alguns
músicos, com o objetivo de ampliar a potência sonora do instrumento, colocaram captadores
para converter as vibrações em sinais elétricos. Hoje em dia, há diferentes modelos de
guitarras, agradando a todos os gostos.
<p>
As décadas de 1950 e 1960 foram as mais importantes para a popularização do instrumento.
Por conta das possibilidades de alteração eletrônica, as guitarras fazem parte de muitos
gêneros musicais do passado e do presente, como é o caso do rock, do blues, do jazz e da
música pop. Hoje em dia, guitarra é sinônimo de música potente e cheia de energia.</p>

				<h2>Aulas de guitarra <span>para adultos</span></h2>
				<p>O ensino das técnicas para tocar guitarra é uma arte dominada pelos experientes profissionais da Escola Infinity. Aqui, você aprende a dominar o instrumento, seus componentes e fundamentos, como escalas, palhetada, digitação, powerchords, acordes, bends, e terá acesso á tecnologia com o uso de pedais de efeito dos mais diversos sons. Nossa escola oferece metodologias de ensino embasadas numa didática moderna do ensino da música. Nosso material didático é completo e exclusivo, e contamos com instrumentos e infraestrutura geral de qualidade. Na Escola Infinity, teoria e prática se integram de forma prazerosa.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


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
					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-bateria-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Bateria</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-bateria-para-adultos" class="col-md-2" title="Ir para Curso de Bateria para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
				</div>

			</div>

			<div class="col-md-6 right">
			 <?php include_once ('includes/php/form-sidebar.php') ?>
				
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-guitarra-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">



<?php get_footer(); ?>
