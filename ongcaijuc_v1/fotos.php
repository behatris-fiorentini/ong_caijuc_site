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
	<title>Fotos</title>
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
	<link rel="stylesheet" type="text/css" href="css/slide.css">
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
		<br><br><br><br><br><br><br><br><br>
		
		<div>
        <figure class="slide"> 
        	<img src="assents/fotos/1.jpg" alt="1">
        	<img src="assents/fotos/2.jpg" alt="2">
        	<img src="assents/fotos/3.jpg" alt="3">
        	<img src="assents/fotos/4.jpg" alt="4">
        	<img src="assents/fotos/5.jpg" alt="5">
        	<img src="assents/fotos/6.jpg" alt="6">
        	<img src="assents/fotos/7.jpg" alt="7">
        	<img src="assents/fotos/8.jpg" alt="8">
        	<img src="assents/fotos/9.jpg" alt="9">
        	<img src="assents/fotos/10.jpg" alt="10">
        	<img src="assents/fotos/11.jpg" alt="10">
        	<img src="assents/fotos/12.jpg" alt="12">
        	<img src="assents/fotos/13.jpg" alt="13">
        	<img src="assents/fotos/14.jpg" alt="14">
        	<img src="assents/fotos/15.jpg" alt="15">
        	<img src="assents/fotos/16.jpg" alt="16">
        </figure> 
      </div>

</body>

<?php
$m->rodape();
?>

</html>