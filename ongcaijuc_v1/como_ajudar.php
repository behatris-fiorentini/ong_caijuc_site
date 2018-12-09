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
	<title>Como Ajudar</title>
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
		<br><br><br><br><br><br><br><br><br><br>
		<div class="titulopag">
			<h2><b>Saiba como nos ajudar</b></h2>
		</div>


<main class="servicos">


<article class="servico">
			<a href="#"><img src="assents/ajuda/comoajudar.png" alt="Como Ajudar"></a>
			<div class="inner">
				<a href="#">Toda Ajuda é Muito Bem-Vinda!</a>
				<h4>Com o que você pode ajudar?</h4>
				<p>Se quiser ajudar nossa Instituição, a ONG aceita doações em dinheiro, materiais (escolar, artes, de limpeza, etc.) e também de alimentos para lanches das crianças (sucos, biscoitos, frutas, etc.). Toda doação é bem-vinda. Veja abaixo como você pode fazer isso.</p>
				
			</div>
		</article>


<article class="servico">
			<a href="#"><img src="assents/ajuda/banestes.png" alt="Agencias do BANESTES"></a>
			<div class="inner">
				<a href="#">Doe Direto em Nossas Conta</a>
				<h4>Você pode ajudar depositando direto em nossa conta na Agência do BANESTES.</h4>
				<h4>Banco BANESTES - Poupança</h4>
				<h4>Agência: 188</h4>
				<h4>Conta: 6.400.931</h4>		
			</div>
		</article>



		<article class="servico">
			<a href="#"><img src="assents/ajuda/ongcaijuc.png" alt="ONG CAIJUC"></a>
			<div class="inner">
				<a href="#">Visite a nossa ONG!</a>
				<h4>Você pode fazer a sua doação direto na ONG.</h4>
				<h4>Rua Alziro Vicente Roldi</h4>
				<h4>Nº: 81</h4>
				<h4>São Roquinho</h4>
				<h4>São Roque do Canaã - CEP:29665-000</h4>
				<h4>Ginásio Poliesportivo "José Reagattieri".</h4>
			</div>
		</article>


		<article class="servico">
			<a href="#"><img src="assents/ajuda/comunicacaoong.png" alt="Comunicação"></a>
			<div class="inner">
				<a href="#">Dúvidas? Entre em contato por nossos meios de comunicação!</a>
				<h4><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbspTelefone: (27)3729-1635.</h4>
				<h4><i class="fa fa-envelope"></i>&nbsp&nbspE-mail: caijuc@yahoo.com.br</h4>
				<h4><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook: <a href="https://www.facebook.com/Caijuc/?ref=br_rs&hc_ref=SEARCH" style="font-size: 1em;">Centro de Apoio Infanto-Juvenil "Canaã"</h4>
			</div>
		</article>

		<article class="servico">
			<a href="#"><img src="assents/ajuda/vakinha.png" alt="Vakinha On"></a>
			<div class="inner">
				<a href="#">Participe de Nossa Vaquinha Online!</a>
			
				<p>Afim de arrecadar fundos, criamos uma vaquinha no site "Vakinha". Você pode nos ajudar fazendo sua contribuição por la também!</p>
				<h4><a href="https://www.vakinha.com.br/vaquinha/ong-centro-de-apoio-infanto-juvenil-canaa">Acesse o site CLICANDO AQUI</a></h4>
			</div>
		</article>

	</main>
	

</body>

<?php
$m->rodape();
?>

</html>