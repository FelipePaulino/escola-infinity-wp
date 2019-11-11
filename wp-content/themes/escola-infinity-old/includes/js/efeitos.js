$(document).ready(function(){
	$('.carrosel').slick({
		dots: false,
		arrows:true,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
      	autoplay: "unslick",
        slidesToShow: "unslick",
        arrows:"unslick", 
        infinite: "unslick",
        settings: "unslick",
        slidesToShow: "unslick",
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});

$(function(){
	var x = $(window).width()
	if(x < 480){
		$(function(){
			$('nav img.logo').attr('src', local +'/images/logo-infinity-celular.png')
		})

$(function(){
	$('li.tel-celular').click(function(e){
		e.preventDefault();
	$('.telefone-aparece').removeClass('telefone-fechado');
	$('.telefone-aparece').addClass('telefone-aberto');
	$('.fechar img').css('display','block')
});
	$('.fechar').click(function(e){
		e.preventDefault();
		$('.telefone-aparece').removeClass('telefone-aberto');
		$('.telefone-aparece').addClass('telefone-fechado');
		$('.fechar img').css('display','none')
	});
});




	$(function(){
	
		$('a.menu-abrir').click(function(e){ 
		 e.preventDefault();
			$('.menu').removeClass('menu-fechado');
			$('.menu').addClass('menu-aberto');
			$('a.menu-fechar').css('display', 'block')
			$('a.menu-abrir').css('display', 'none')

			
		})
		$('a.menu-fechar').click(function(e){ 
		 e.preventDefault();
			$('.menu').removeClass('menu-aberto');
			$('.menu').addClass('menu-fechado');
			$('a.menu-fechar').css('display', 'none')
			$('a.menu-abrir').css('display', 'block')
			 $('.voltar-menu').removeClass('voltar-aberto');
			 $('.drop').removeClass('sub-menu-aberto');
			$('.drop').addClass('sub-menu-fechado');
		})
	})

	$(function(){
	
		$('.menu-cursos').click(function(){ 

			$('.voltar-menu').addClass('voltar-aberto');
			$('.drop').removeClass('sub-menu-fechado');
			$('.drop').addClass('sub-menu-aberto');
		});
	

		$('.voltar-menu').click(function(e){ 
		 e.preventDefault();
			$('.voltar-menu').removeClass('voltar-aberto');
			$('.drop').removeClass('sub-menu-aberto');
			$('.drop').addClass('sub-menu-fechado');
		});
	});



		var windowHeight = window.innerHeight;



 




		$(' nav ul span.menu ul').css('height', windowHeight - 145);


		$(function() {
			$('.categorias').slick({
			dots: false,
			arrows:false,      
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000
			});
			$('.container-blog').slick({
			dots: false,
			arrows:false,      
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000
			});
			$('.galeria').slick({
			dots: false,
			arrows:false,      
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000
			});


		})
	}
})



	 $(function(){ 

    $('.sticky_navigation').addClass('menu-fixed');
    
  })

    $(function(){ 


$('.lightbox img').click(function(){ 
	var index = $( "a.lightbox img" ).index( this );
	$('.grande').eq(index).addClass('aparecer')
	$('body').css('overflow-y','hidden')	
});

$('.grande').click(function(){
	$(this).removeClass('aparecer')
	$('body').css('overflow-y','visible')
})
})
	$(function(){
		$('.tel').click(function(e){ 
		   e.preventDefault();
		   if($('.telefone_escondido').hasClass('aparecer')){
		     $('.telefone_escondido').removeClass('aparecer');
		     $(this).addClass('aparecer');
		   }else{
		     $('.telefone_escondido').addClass('aparecer');
		     $(this).removeClass('aparecer');
		     setTimeout(function(){ 
				$('.telefone_escondido').removeClass('aparecer');
			}, 7000);
		   }
		});	
	});


	$(function(){
		$('.agende').click(function(e){ 
		   e.preventDefault();
		   $('.form-contato-ativo').fadeIn(200)
		})
		$('.fechar').click(function(e){ 
		   e.preventDefault();
		   $('.form-contato-ativo').fadeOut(200)
		})
	})

