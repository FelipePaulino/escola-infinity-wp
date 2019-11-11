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
						<p>Para sua maior comodidade, a Infinity também oferece aulas de música em domicílio. No
						conforto e na segurança do seu próprio lar, você recebe a visita de um de nossos professores e
						adquire todo o conhecimento que aprenderia se estivesse na unidade.
						<p>
						Seja para aprender a cantar ou a tocar um instrumento determinado, é só informar seu
						endereço e sua disponibilidade de tempo para agendarmos as aulas. De forma prática e
						simples, você alcança seus objetivos sem sair de casa.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-rosa.png" class="bush-rosa">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>Nossos <span class="titulo-vermelho">Cursos</span></h2>
				<p>A Escola Infinity ensina música para diferentes públicos: crianças, adolescentes, adultos e
idosos. Do nível mais básico ao mais avançado, aqui você encontra a oportunidade de adquirir
e aprofundar seus conhecimentos no universo musical e desenvolver seu potencial. Nossos
cursos incluem aulas de canto, bateria, contrabaixo, guitarra, piano, teclado, saxofone, violão e
violino.
<p>
Para qualquer que seja o instrumento escolhido, contamos com profissionais qualificados para
orientar nossos alunos. Sem sair de casa, você assiste a aulas personalizadas e flexibilizadas
conforme as suas necessidades. Dessa forma, você aprende todas as técnicas, posturas e
recursos para dominar o instrumento escolhido e produzir música de qualidade.</p>

				<h2>Metodologia <span class="titulo-vermelho">de qualidade</span></h2>
				<p>Todos os professores da Escola Infinity são cuidadosamente selecionados, levando em
consideração sua experiência e sua formação acadêmica. Em uma didática moderna e
eficiente, as aulas unem teoria e prática de modo agradável, tornando o processo de
aprendizagem leve e prático.
<p>
As aulas são personalizadas de acordo com o objetivo do aluno, e oferecemos material
didático exclusivo. Com a Escola Infinity, seja para tocar ou cantar, você explora seus
potenciais e desenvolve seus talentos musicais.</p>


			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
			
			</div>
		</div>
		<div class="container conteudo">
			<h2 style="font-size: 30px;">veja outros <span class="titulo-vermelho">cursos instrumentais</span></h2>
			<div class="categorias">
				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violao-crianca.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violão</span></h2>
							<p>Saiba Mais</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-criancas" class="col-md-2" title="Ir para Curso de Violão para Crianças"></a>
						</figcaption>			
					</figure>
				</div>

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
			</div>
			<p class="deslize"><< Deslize para ver mais  >></p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">
<?php 


get_footer(); 

?>

