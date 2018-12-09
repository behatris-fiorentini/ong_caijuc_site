	<?php  
	include 'cabecalho_rodape.php';
	?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<!-- Definindo o tamanho da tela/ Respancividade/ Viewport >>> width= device-width = ajusta o tamanho da tela para o tamanho da tela do dispositivo que à está exibindo >>> initial-scale=1 = diz que o nível inicial do zoom é 1 -->
	<meta name="Viewport" content="width = device-width">
	<!--Codificação do arquivo HTML-->
	<meta charset="utf-8">
	<!--Título da Página-->
	<title>Fale Conosco</title>
	<!--Descrição da Página-->
	<meta name="descreption" content="ONG Centro de Apoio Infânto-Juvenil Canaã">
	<!--Pálavras chaves de pesquisa da página-->
	<meta name="keywords" content="ONG, Educação, Inclusão Social">
	<!--Moteres de Busca-->
	<meta name="robots" content="index, follow"> <!--O Follow inclui todos os links da index para a busca-->
	<!--Autores da página-->
	<meta name="author" content="Behatris Fiorentini, Jonas Rodrigues Ramires">
	<!--Importando o arquivo CSS para dar designa página index -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Importando fonte "Font Awesome 4.7.0" para letra do site-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Imporando a familia Lato e alguns de seus estilos do google fontes-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,700" rel="stylesheet" type="text/css">
	<!--Importando o JQuery para página-->
	<script src="js/jquery-3.2.1.min.js"></script>

<?php
$m = new Metodos();
$m->cabecalho();
?>

<body>
		<br><br><br><br><br><br>
		
		<article class="sobreinf">
			<div class="imginf">
			<img style="text-align: center; float: center;" src="assents/quemsomos/contato.png" alt="Contato">
			</div>
			<br>
			<div class="titulopag">
			<h2><b>Fale Conosco!</b></h2>
			<br>
			</div>		
			<div class="falecon">
			<h4><b>Entre em contato conosco através:</b></h4>
			<br>
			<h4><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbspTelefone: (27)3729-1635.</h4>
			<h4><i class="fa fa-envelope"></i>&nbsp&nbspE-mail: caijuc@yahoo.com.br</h4>
			<h4><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook: <a href="https://www.facebook.com/Caijuc/?ref=br_rs&hc_ref=SEARCH"> Centro de Apoio Infanto-Juvenil "Canaã"</a></h4>
			<br><br>
			<h4>Ou vá direto a nossa Instituição:</h4>
			<br>
			<h4><i class="fa fa-street-view" aria-hidden="true"></i>&nbsp Rua: Alziro Vicente Roldi</h4>
			<h4><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>&nbsp Nº: 81</h4>
			<h4><i class="fa fa-home" aria-hidden="true"></i>&nbsp Bairro: São Roquinho</h4>
			<h4><i class="fa fa-home" aria-hidden="true"></i>&nbsp Cidade: São Roque do Canaã</h4>
			<h4><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp Depencias do Ginásio Poliesportivo "José Reagattieri".</h4>
			</div>

		</article>
				<br><br><br><br><br><br>

</body>

<?php
$m->rodape();
?>

</html>