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
	<title>Matriculas</title>
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
		<br><br><br><br><br><br><br>
		
		<article class="sobreinf">
			<div class="imginf">
			<img style="text-align: center; float: center;" src="assents/quemsomos/inscricao.jpg" alt="Informação">
			</div>
			<br>
			<div class="titulopag">
			<h2><b>Matriculas</b></h2>
			<br>
			</div>

			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp A ONG Centro de Apoio Infanto-Juvenil "Canaã" atende crianças d todas as idades do município de São Roque do Canaã e para realizar a matricula de seu filho, basta ir até a instituição localizada:</p><br>

			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-street-view" aria-hidden="true"></i>&nbsp Rua: Alziro Vicente Roldi</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>&nbsp Nº: 81</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-home" aria-hidden="true"></i>&nbsp Bairro: São Roquinho</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-home" aria-hidden="true"></i>&nbsp Cidade: São Roque do Canaã</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbsp Depencias do Ginásio Poliesportivo "José Reagattieri".</p>
				<br>
 			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Você deve ter em mãos uma cópia da certidão de nascimento de seu filho e lá, preencherá a ficha de inscrição dele.</p>
 				<br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Você poderá escolher as atividades que seu filho irá fazer. Porém, algumas atividades possuem vagas "ilimitadas" e eles poderão ser inscritos na hora, enquanto outras, necessitarão de um tempo de espera para que comecem a fazer. <a href="atividades.php">Clique aqui para ver nossas atividades e suas disponibilidades de matricula.</a></p>
				<br>
			<p>Dúvidas? Contate-nos pelo telefone:</p><br>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbspTelefone: (27)3729-1635.</p>
			
		</article>
				<br><br><br><br><br><br>

</body>

<?php
$m->rodape();
?>

</html>