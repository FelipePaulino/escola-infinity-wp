
<div class="container">
        <div class="form-home">
            <h4>Fale com a <span>Gente</span></h4>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Aurélia, 668 - Lapa - São Paulo - SP</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i>escolainfinity@escolainfinity.com.br</p>
            <p><i class="fa fa-skype" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            <form>
                <input type="text" name="" placeholder="Nome">
                <input type="text" name="" placeholder="Telefone">
                <input type="text" name="" placeholder="Email">
                <textarea placeholder="Mensagem"></textarea>
                <input type="submit" name="" value="ENVIAR" class="bt-enviar">
            </form>
        </div>
    </div>

    <style>

    </style>

    <div id="map">


    </div>
    <div class="footer">
        <div class="container">
            <div class="info-interna">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-infinity-auxiliar.png" alt="Logo Escola Infinity" title="Escola Infinity">
                <p>Para aprender a cantar ou a tocar diversos instrumentos, a Escola Infinity possui uma didática
moderna e oferece aulas para todas as idades.</p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Aurélia, 668 - Lapa - São Paulo - SP</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="escolainfinity@escolainfinity.com.br">escolainfinity@escolainfinity.com.br</a></p>
                <p><i class="fa fa-skype" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
            </div>
            <div class="menu-footer">
                <h5>Institucional</h5>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para "><span> ></span>Home</a>
                <a href="musicalizacao-infantil" title="Ir para Home"><span> ></span>Musicalização Infantil</a>
                <a href="teoria" title="Ir para Teoria Musical"><span> ></span>Teoria Musical</a>
                <a href="sobre" title="Ir para Sobre Nós"><span> ></span>Sobre Nós</a>
                <a href="domicilio" title="Ir para Aulas á Domilício"><span> ></span>Aulas á Domilício</a>
                <a href="professores" title="Ir para Nossos Professores"><span> ></span>Nossos Professores</a>
            </div>
            <div class="menu-footer menu-menor">
                <h5>CURSO PARA CRIANÇAS</h5>
                <a href="curso-de-violao-para-criancas" title="Ir para Violão"><span> ></span>Violão</a>
                <a href="curso-de-guitarra-para-criancas" title="Ir para Guitarra"><span> ></span>Guitarra</a>
                <a href="curso-de-canto-para-criancas" title="Ir para Canto"><span> ></span>Canto</a>
                <a href="curso-de-teclado-para-criancas" title="Ir para Teclado"><span> ></span>Teclado</a>
                <a href="curso-de-piano-para-criancas" title="Ir para Piano"><span> ></span>Piano</a>
                <a href="curso-de-bateria-para-criancas" title="Ir para Bateria"><span> ></span>Bateria</a>
                <a href="curso-de-contrabaixo-para-criancas" title="Ir para Contra Baixo"><span> ></span>Contra Baixo</a>
                <a href="curso-de-violino-para-criancas" title="Ir para Violino"><span> ></span>Violino</a>
                <a href="curso-de-musicalizacao-para-criancas" title="Ir para Musicalização com Instrumentos"><span> ></span>Musicalização com Instrumentos</a>
            </div>
            <div class="menu-footer menu-menor">
                <h5>Jovens/Adultos</h5>
                <a href="curso-de-violao-para-adultos" title="Ir para Violão"><span> ></span>Violão</a>
                <a href="curso-de-guitarra-para-adultos" title="Ir para Guitarra"><span> ></span>Guitarra</a>
                <a href="curso-de-canto-para-adultos" title="Ir para Canto"><span> ></span>Canto</a>
                <a href="curso-de-teclado-para-adultos" title="Ir para Teclado"><span> ></span>Teclado</a>
                <a href="curso-de-piano-para-adultos" title="Ir para Piano"><span> ></span>Piano</a>
                <a href="curso-de-bateria-para-adultos" title="Ir para Bateria"><span> ></span>Bateria</a>
                <a href="curso-de-contrabaixo-para-adultos" title="Ir para Contra Baixo"><span> ></span>Contra Baixo</a>
                <a href="curso-de-violino-para-adultos" title="Ir para Violino"><span> ></span>Violino</a>
                <a href="curso-de-saxofone-para-adultos" title="Ir para Saxofone"><span> ></span>Saxofone</a>
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