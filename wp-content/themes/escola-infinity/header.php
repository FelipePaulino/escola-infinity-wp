<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <meta name="viewport" content="width=device-width, localtreechildrenuser-scalable=no"> 

<meta name="robots" content="index, follow">
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Tema opcional -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<!-- Última versão JavaScript compilada e minificada -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/font-awesome/css/font-awesome.min.css">



<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/css/set1.css"/>



<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/font/stylesheet.css">


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KNXZLZT');</script>
<!-- End Google Tag Manager -->

</head>

<body>
     
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNXZLZT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="form-contato-ativo">

		<div class="container">

		<div class="modal-form">

			<i class="fa fa-times fechar" aria-hidden="true"></i>

			<h3>AGENDE AGORA UMA <span>AULA SEM COMPROMISSO</span></h3>
<?php echo do_shortcode( '[contact-form-7 id="116" title="Formulario Modal"]' ); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/img-modal.png">

		</div>

		</div>

		</div>
