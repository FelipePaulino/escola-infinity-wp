<?php 

/*
Template Name: Teoria
*/

get_header(); 

?>
<style type="text/css">
.right {
    height: auto;
}
.teoria{
	border-bottom: 2px solid #f64a00;
}
.banner-interna p, .banner-interna h2 {
    color: #12162d;
}

 @media (max-width: 480px) {



 .teoria{

 	border-bottom: 0;

 }
 	.conteudo a {
	
	}

 }

</style>
	<title>Escola Infinity</title>
</head>
<body>
		<div class="carrosel">
			<div>
				<div class="banner-interna banner-teoria laranja">
				<div class="container">
					<div class="texto-banner">
						<h1>Aulas de <span>Teoria Musical na Lapa</span></h1>
						<p>Para quem deseja aprofundar seus conhecimentos musicais de maneira geral, indo além da
especialização em um determinado instrumento, a Infinity oferece o curso de teoria musical.
Essa área do conhecimento é dedicada ao estudo da estrutura e do processo de formação da
música.</p>
<p>
Para iniciar os estudos no universo da música ou para aperfeiçoar-se naquilo que você já
domina, o conhecimento teórico facilita e otimiza a prática musical. A teoria musical
contextualiza os conhecimentos adquiridos e permite que o aluno compreenda melhor os
elemento que compõem a música.</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Agende agora!" class="agende">Agende <span>Agora!</span></a>
					</div>
					</div>
					
				</div>

			</div>
			
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-rosa.png" class="bush-rosa">
		<?php include_once ('includes/php/menu.php') ?>
		<div class="container">
			<div class="col-md-6 conteudo">
				<h2>Saiba mais sobre a <span class="titulo-rosa">Teoria Musical</span></h2>
				<p>O estudo da teoria musical compreende a análise dos elementos do som e das estruturas e
formas musicais, abordando itens como: harmonia, melodia, ritmo, forma, solfejo e técnicas
de composição. Também inclui noções de estética musical, que analisa os diferentes gêneros
musicais, suas características e o contexto em que surgiram. Por fim, os estudos teóricos da
música também abrangem os sistemas de notação musical, ou seja, as representações gráficas
que permitem que o músico compreenda e interprete uma peça musical, como as cifras,
partituras e tablaturas.</p>
<p>
Esse tipo de conhecimento permite que o aluno aprimore suas técnicas para produzir música
com qualidade.</p>

				<h2>Teoria musical<span class="titulo-rosa"> é na Infinity </span></h2>
				<p>A Escola Infinity oferece aulas de teoria musical de uma forma leve e agradável. Dessa forma,
os alunos adquirem conhecimentos teóricos que embasam e aprimoram sua performance na
prática. Oferecemos material didático exclusivo e contamos com professores altamente
capacitados.</p>
<p>
Contamos com salas climatizadas e equipadas com toda a estrutura necessária para a
aprendizagem. Sempre preocupados em integrar a teoria e a prática, nossa moderna
metodologia de ensino assegura que o aluno adquira conhecimentos sólidos e, dessa forma, se
especialize no mundo musical.</p>


			
			</div>
			<div class="col-md-6 right">
				 <?php include_once ('includes/php/form-sidebar.php') ?>
			
			</div>
		</div>
		<div class="container conteudo">
			<h2 style="font-size: 30px;">veja outros <span class="titulo-rosa">cursos instrumentais</span></h2>
			<div class="categorias">

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
			</div>
			<p class="deslize"><< Deslize para ver mais  >></p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bush-laranja.png" class="bush-laranja">
<?php 



get_footer(); 

?>

