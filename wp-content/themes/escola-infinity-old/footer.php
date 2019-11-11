
<div class="container">
        <div class="form-home">
            <h4>Fale com a <span>Gente</span></h4>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Aurélia, 668 - Lapa - São Paulo - SP</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i>escolainfinity@escolainfinity.com.br</p>
            <p><i class="fa fa-skype" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            <!--<form>
                <input type="text" name="" placeholder="Nome">
                <input type="text" name="" placeholder="Telefone">
                <input type="text" name="" placeholder="Email">
                <textarea placeholder="Mensagem"></textarea>
                <input type="submit" name="" value="ENVIAR" class="bt-enviar">
            </form>-->
            <?php echo do_shortcode( '[contact-form-7 id="71" title="Formulário Home"]' ); ?>
        </div>
    </div>

    <style>

    </style>

    <div id="map">


    </div>
    <div class="footer">
        <div class="container">
            <div class="info-interna">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-infinity-auxiliar.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporon incididunt ut labore et dolore magnamal  nostrud exercitation ullamco.</p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Aurélia, 668 - Lapa - São Paulo - SP</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i>escolainfinity@escolainfinity.com.br</p>
                <p><i class="fa fa-skype" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            </div>
            <div class="menu-footer">
                <h5>Institucional</h5>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span> ></span>  Home</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>musicalizacao-infantil"> <span> ></span>  Musicalização Infantil</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>aulas-de-teoria-musical"> <span> ></span>  Teoria Musical</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>sobre"> <span> ></span>  Sobre Nós</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>domicilio"> <span> ></span>  Aulas á Domilício</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>professores"> <span> ></span>  Nossos Professores</a>
            </div>
            <div class="menu-footer menu-menor">
                <h5>CURSO PARA CRIANÇAS</h5>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-criancas"><span> ></span> Violão</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-guitarra-para-criancas"> <span> ></span>  Guitarra</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-canto-para-criancas"> <span> ></span>  Canto</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-teclado-para-criancas"> <span> ></span>  Teclado</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-piano-para-criancas"> <span> ></span>  Piano</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-bateria-para-criancas"> <span> ></span>  Bateria</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-baixo-para-criancas"> <span> ></span>  Contra Baixo</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violino-para-criancas"> <span> ></span>  Violino</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-musicalizacao-para-criancas"> <span> ></span>  Musicalização com Instrumentos</a>
            </div>
            <div class="menu-footer menu-menor">
                <h5>Jovens/Adultos</h5>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violao-para-adultos"><span> ></span> Violão</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-guitarra-para-adultos"> <span> ></span>  Guitarra</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-canto-para-adultos"> <span> ></span>  Canto</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-teclado-para-adultos"> <span> ></span>  Teclado</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-piano-para-adultos"> <span> ></span>  Piano</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-bateria-para-adultos"> <span> ></span>  Bateria</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-baixo-para-adultos"> <span> ></span>  Contra Baixo</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-violino-para-adultos"> <span> ></span>  Violino</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>curso-de-saxofone-para-adultos"> <span> ></span>  Saxofone</a>
            </div>
        </div>
    </div>

    <li class="tel-celular" >
        <a href="#" class="ver-telefone telefone_escondido">
        <img src="<?php echo get_template_directory_uri(); ?>/images/seta.png" class="seta"></a>Ver Telefone
    </li>

    <script>
      function initMap() {
        var uluru = {lat: -23.5277536, lng: -46.6980917};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-Wc8uF7xBXm4zVLVScUaiRTcybf_VHFE&callback=initMap">
    </script>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
    local = "<?php echo get_template_directory_uri() ?>";
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/js/efeitos.js"></script>

<script type="text/javascript">

$(function(){ 

	$('.cursos').mouseover(function() {

		$('.box-hover').fadeIn(200)

	})

	$('.cursos').mouseout(function() {

		$('.box-hover').fadeOut(200)

	})

})

$(function(){

	var x = $(window).width()



	if(x > 480){



}

})



</script>

</body>

</html>