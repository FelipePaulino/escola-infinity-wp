<?php 

/*
Template Name: Curso de Piano para Adultos
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
				<div class="banner-interna banner-piano-adulto laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Curso de piano <span>para adultos na Lapa</span></h1>
						<p>Imortalizado nas grandes performances dos maiores nomes da música, como Mozart e
Beethoven, o piano foi e ainda é um dos instrumentos que mais exercem fascínio sobre as
pessoas. Seja na música erudita ou na música popular, a potência do instrumento é capaz de
criar grandes performances, das músicas mais tradicionais às contemporâneas.
<p>
Imponente, refinado e versátil, o piano é sinônimo de sofisticação. Saber tocá-lo é uma arte
muito admirada e que pode ser aprendida aqui na Escola Infinity.</p>
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
				<h2>Saiba mais sobre<span> o piano </span></h2>
				<p>O piano é um instrumento criado pelo italiano Bartolomeu Cristofori, por volta de 1700.
Geralmente, os pianos são compostos por 88 teclas, que fazem as cordas vibrarem e emitirem
sons que variam conforme a intensidade empregada pelo pianista. Precários em seus
primeiros anos, os pianos passaram por modificações nos séculos XIX e XX que os tornaram
mais potentes e acessíveis.
<p>
Da música clássica ao jazz contemporâneo, o piano é versátil e faz parte de um vasto conjunto
de estilos musicais, seja na performance solo ou no acompanhamento. Sua versatilidade
tornou-se um importante estímulo ao aprendizado do instrumento.</p>

				<h2>Aulas de piano <span>para adultos</span></h2>
				<p>Na Escola Infinity, você encontra um curso completo, com a supervisão de professores
especialistas muito qualificados. Em nossa metodologia, o aluno aprende posturas adequadas,
digitação de notas, partitura e harmonização. Integrando a teoria e a prática, cada aluno se
torna apto a tocar piano com maestria, seja popular ou erudito.
<p>
Com ótima infraestrutura e uma didática moderna, a Escola Infinity é o local para desenvolver
seus talentos e transformar seus sonhos musicais em realidade.</p>

				<h2 style="font-size: 30px;">veja outros <span>cursos instrumentais</span></h2>
				<div class="categorias">


						<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-bateria-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Bateria</span></h2>
							<p>Saiba Mais</p>
							<a href="curso-de-bateria-para-adultos" class="col-md-2" title="Ir para Curso de Bateria para Adultos"></a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-baixo-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Contra-Baixo</span></h2>
							<p>Saiba Mais</p>
							<a href="curso-de-contrabaixo-para-adultos" class="col-md-2" title="Ir para Curso de Contra-Baixo para Adultos"></a>
						</figcaption>			
					</figure>

			</div>

				<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-violino-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Violino</span></h2>
							<p>Saiba Mais</p>
							<a href="curso-de-violino-para-adultos" class="grid col-md-2" title="Ir para Curso de Violino para Adultos"></a>
						</figcaption>			
					</figure>
				</div>


								<div class="grid">
					<figure class="effect-ruby">
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/categoria-saxofone-adulto.jpg" alt="img13"/>
					
						<figcaption>
							<h2>Aula de <span>Saxofone</span></h2>
							<p>Saiba Mais</p>
							<a href="curso-de-saxofone-para-adultos" class="col-md-2" title="Ir para Curso de Saxofone para Adultos"></a>
						</figcaption>			
					</figure>
				</div>
				</div>

			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/auxiliar-piano-adulto.jpg" class="imagem-auxiliar">
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">


<?php get_footer(); ?>
