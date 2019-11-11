<?php 

/*
Template Name: Curso de Guitarra para Crianças
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
				<div class="banner-interna banner-guitarra-crianca azul">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de guitarra <span>para crianças na Lapa</span></h1>
						<p>Ainda na infância, a música pode ser um importante mecanismo para desenvolver
determinadas habilidades e competências, como a coordenação motora, a expressão corporal
e a percepção de sons e ritmos. As guitarras são instrumentos que atraem o público infanto-
juvenil por conta de sua potência sonora. Como o instrumento se adapta a diferentes estilos
musicais, aprender a tocar guitarra ajuda a criança a conhecer novos ritmos.
<p>
Criatividade, disciplina e desenvolvimento motor são alguns dos benefícios que o ensino da
guitarra traz a esse público.</p>
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
				<h2>Saiba mais sobre a  <span class="titulo-crianca">guitarra</span></h2>
				<p>As guitarras elétricas são instrumentos de corda muito comuns na música popular atual. Esses
instrumentos são evoluções dos violões. Para tornar os sons emitidos mais potentes, foram
instalados captadores magnéticos que criam sinais elétricos a partir da vibração das cordas.
Essa revolução ocorreu na década de 1930 e, desde então, a guitarra se popularizou, tendo
diferentes modelos produzidos.
<p>
Hoje em dia, as guitarras estão entre os instrumentos mais admirados pelas pessoas, por conta
das possibilidades de efeitos sonoros que oferecem. Elas estão presentes em diferentes
gêneros da música popular, como o rock, o pop, o blues e o jazz.</p>

				<h2>Aulas de Guitarra <span class="titulo-crianca">para crianças </span></h2>
				<p>Na Escola Infinity, o ensino da guitarra para crianças é realizado com metodologias específicas
e adaptadas a esse público. Contamos com materiais exclusivos, instrumentos de alta
qualidade e professores experientes. As aulas são realizadas em ambientes agradáveis e
equipados com todos os itens necessários.
<p>
Explorando o aspecto lúdico, as aulas são prazerosas e divertem a criança, ao mesmo tempo
em que a ensinam as técnicas do instrumento. A Escola Infinity realiza o sonho do pequeno
músico para desenvolver seus talentos.</p>

				<h2 style="font-size: 30px;">veja outros <span class="titulo-crianca">cursos instrumentais</span></h2>
				<div class="categorias">
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
					<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-bateria-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Bateria</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-bateria-para-criancas" class="col-md-2" title="Ir para Curso de Bateria para Crianças"></a>
						</figcaption>			
					</figure>
				</div>
				</div>
			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-guitarra-crianca.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>

