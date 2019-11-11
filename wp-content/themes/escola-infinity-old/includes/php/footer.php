
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
    			<img src="images/logo-infinity-auxiliar.png">
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporon incididunt ut labore et dolore magnamal  nostrud exercitation ullamco.</p>
    			<p><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Aurélia, 668 - Lapa - São Paulo - SP</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>escolainfinity@escolainfinity.com.br</p>
				<p><i class="fa fa-skype" aria-hidden="true"></i>(011) 3803-9335 / 99410-8841</p>
    		</div>
    		<div class="menu-footer">
    			<h5>Institucional</h5>
    			<a href="index.php"> <span> ></span>  Home</a>
    			<a href="musicalizacao-infantil.php"> <span> ></span>  Musicalização Infantil</a>
    			<a href="teoria.php"> <span> ></span>  Teoria Musical</a>
    			<a href="sobre.php"> <span> ></span>  Sobre Nós</a>
    			<a href="domicilio.php"> <span> ></span>  Aulas á Domilício</a>
                <a href="professores.php"> <span> ></span>  Nossos Professores</a>
    		</div>
    		<div class="menu-footer menu-menor">
    			<h5>CURSO PARA CRIANÇAS</h5>
    			<a href="curso-violao-crianca.php"><span> ></span> Violão</a>
    			<a href="curso-guitarra-crianca.php"> <span> ></span>  Guitarra</a>
    			<a href="curso-canto-crianca.php"> <span> ></span>  Canto</a>
    			<a href="curso-teclado-crianca.php"> <span> ></span>  Teclado</a>
    			<a href="curso-piano-crianca.php"> <span> ></span>  Piano</a>
                <a href="curso-bateria-crianca.php"> <span> ></span>  Bateria</a>
                <a href="curso-baixo-crianca.php"> <span> ></span>  Contra Baixo</a>
                <a href="curso-violino-crianca.php"> <span> ></span>  Violino</a>
                <a href="curso-musicalizacao-crianca.php"> <span> ></span>  Musicalização com Instrumentos</a>
    		</div>
            <div class="menu-footer menu-menor">
                <h5>Jovens/Adultos</h5>
                <a href="curso-violao-adulto.php"><span> ></span> Violão</a>
                <a href="curso-guitarra-adulto.php"> <span> ></span>  Guitarra</a>
                <a href="curso-canto-adulto.php"> <span> ></span>  Canto</a>
                <a href="curso-teclado-adulto.php"> <span> ></span>  Teclado</a>
                <a href="curso-piano-adulto.php"> <span> ></span>  Piano</a>
                <a href="curso-bateria-adulto.php"> <span> ></span>  Bateria</a>
                <a href="curso-baixo-adulto.php"> <span> ></span>  Contra Baixo</a>
                <a href="curso-violino-adulto.php"> <span> ></span>  Violino</a>
                <a href="curso-saxofone-adulto.php"> <span> ></span>  Saxofone</a>
            </div>
    	</div>
    </div>

    <li class="tel-celular" >
        <a href="#" class="ver-telefone telefone_escondido">
        <img src="images/seta.png" class="seta"></a>Ver Telefone
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