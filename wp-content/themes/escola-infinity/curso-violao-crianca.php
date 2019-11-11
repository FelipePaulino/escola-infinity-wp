<?php 

/*
Template Name: Curso de Violão para Crianças
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
				<div class="banner-interna banner-violao-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de violao <span>para crianças na Lapa</span></h1>
						<p>Cada vez mais cedo, é possível identificar aptidões musicais nas crianças. Além disso, a música
possibilita que a criança desenvolva sua audição, noções rítmicas e sensibilidade em relação
aos estilos musicais. O violão é um dos instrumentos mais enraizados na cultura popular
brasileira, de modo que ele é uma escolha frequente no ensino da música para crianças.
<p>
Fazendo parte de diferentes gêneros musicais, o violão estimula a criança a expressar seus
sentimentos e desenvolver a concentração.</p>
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
				<h2>Saiba mais sobre o <span class="titulo-crianca">violão</span></h2>
				<p>Instrumento de corda, o violão é um dos instrumentos musicais mais populares e antigos do
mundo. Acredita-se que esse instrumento tenha chegado à península ibérica trazido pelos
muçulmanos (num instrumento chamado alaúde árabe) ou durante a expansão do Império
Romano (por meio da cítara romana).
<p>
Os portugueses trouxeram o instrumento ao Brasil, onde se popularizou. Da música popular à
música erudita, o violão faz parte do samba, do rock, do pop, do choro, do jazz, da música
sertaneja, entre outros gêneros. Acredita-se que o nome “violão” tenha sido adotado na língua
portuguesa como um meio de diferenciar esse instrumento das violas.</p>

				<h2>Aulas de Violão para crianças<span class="titulo-crianca"> é na Infinity </span></h2>
				<p>Na Escola Infinity, oferecemos um espaço moderno e devidamente equipado para o ensino do
violão para crianças. Contamos com profissionais experientes, qualificados para o ensino
infantil. Com material didático exclusivo, nos certificamos de que as aulas sejam agradáveis e
prazerosas, explorando o aspecto lúdico. Isso permite que a criança desenvolva seus potenciais
de uma forma divertida.
<p>
Com metodologias eficientes e instrumentos de alta qualidade, a Escola Infinity realiza o sonho
da criança de aprender a tocar violão com sucesso.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
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

			<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-teclado-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Teclado</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-teclado-para-criancas" class="grid col-md-2" title="Ir para Curso de Teclado para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-piano-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Piano</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-piano-para-criancas" class="col-md-2" title="Ir para Curso de Piano para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-violao-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">

<?php 



get_footer(); 

?>
